<?php

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {
	
	// public function _initialize(){
	// if(isset($_SESSION['name'])){
	// $this->error('请先登录 ! ');
	// }
	// }
	public function login() {
		$this->assign ( 'APPLICATION_NAME', C ( 'APPLICATION_NAME' ) );
		$this->display ();
	}
	public function loginSubmit() {
		$account = $_POST['account'];
		$user = M ("user");
		
		$tempUser = $user->where ( 'useraccount=' . '"' . $account . '"' )->limit(1)->select();

		
		if (strcmp ( $_POST ['password'], $tempUser[0]['userpassword'] ) == 0) {
			// 登录成功
			// echo "success";
			session ( 'userAccount', $tempUser[0]['useraccount'] );
			session ( 'userId', $tempUser[0]['userid'] );
			
			$this->success ( C ( 'LOGIN_SUCCESS' ), 'home' );
		} else {
			// 登录失败
			// echo "false";
			$this->error ( C ( 'LOGIN_FAIL' ) );
		}
	}
	public function home() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign('APPLICATION_NAME',C('APPLICATION_NAME'));
		$this->assign('USER_ID',$_SESSION ['userId']);
		$this->assign('CURRENT_MENU','HOME');
		$this->display ();
	}
	public function logout() {
		session ( 'userAccount', null );
		session ( 'userId', null );
		
		$this->success ( '退出成功', 'login' );
	}
}
