<?php

namespace Admin\Controller;

use Think\Controller;
use FCKeditor\FCKeditor;

class BreakingNewsController extends Controller {
	
	// public function _initialize(){
	// if(!isset($_SESSION['userId'])){
	// $this->error('请先登录 ! ');
	// }
	// }
	public function allBreakingNews() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign('APPLICATION_NAME',C('APPLICATION_NAME'));
		$this->assign('USER_ID',$_SESSION ['userId']);
		$this->assign('USER_LEVEL',$_SESSION ['userLevel']);
		$this->assign('CURRENT_MENU','BREAKINGNEWS');
		
		$breakingNews = M ( 'breakingnews' );
		try {
			if (isset ( $_GET ['delete'] )) {
				// 传入删除参数
				$breakingNews->where ( 'breakingnewsid=' . $_GET ['delete'] )->delete ();
			}
			if (isset ( $_GET ['deleteMulti'] )) {
				// 传入删除多项的参数
				$multi = explode ( ',', $_GET ['deleteMulti'] );
				for($index = 1; $index < count ( $multi ); $index ++) {
					// 从第二个开始删除，第一个的产生是由于U方法生成参数的时候无法不输入一个参数
					if ($multi [$index] != null) {
						$breakingNews->where ( 'breakingnewsid=' . $multi [$index] )->delete ();
					}
				}
			}
		} catch ( Exception $e ) {
			// 删除错误
			$this->error ( C ( 'DELETE_FAIL' ) . $e->__toString () );
			return;
		}
		
		// 查询当前所有的工作状态并且分页
		$count = $breakingNews->count ();
		$page = new \Think\Page ( $count, C ( 'PAGE_COUNT' ),'p1' );
		$page->setP ( 'p1' );
		$orderby ['breakingnewsid'] = 'desc';
		$list = $breakingNews->order ( $orderby )->limit ( $page->firstRow . ',' . $page->listRows )->select ();
		
		
		$this->assign ( 'list', $list ); // 赋值数据集
		$this->assign ( 'page', $page->show () ); // 赋值分页输出
		
		$editor = new \FCKeditor\FCKeditor ( 'editor' );
		$editor->Value = ' '; // 设置默认值
		$editorHtml = $editor->Createhtml (); // 创建。注意：若用到模板（如smarty）则$fck = $oFCKeditor->CreateHtml();然后把$fck抛给模板
		
		$this->assign ( "editorHtml", $editorHtml );
		$this->display ();
	}
	public function addBreakingNews() {
		try {
			$breakingNews = M ( 'breakingnews' );
			
			$data ['breakingNewsName'] = $_POST ['breakingNewsName'];
			$data ['breakingNewsRelease'] = $_SESSION ['userId'];
			$data ['breakingNewsReleaseDate'] = date ( 'Y-m-d H:i:s', time () );
			$data ['breakingNewsPageView'] = 0;
			$data ['breakingNewsType'] = $_POST['breakingNewsType'];
			$data ['breakingNewsMainContent'] = $_POST['breakingNewsMainContent'];
// 			dump($_POST ['editor']);
// 			return ;
			// $data['workTendencyReleaseDate'] = $_POST['workTendencyReleaseDate'];
			// 创建内容的html文件
			$myFilePath = C ( 'APPLICATION_CONTENTHTML_PATH' ) . '/' . time () . rand () . '.html';
			$myFile = fopen ( $myFilePath, "w" ) or die ( "Unable to open file!" );
			fwrite ( $myFile, $_POST ['editor'] );
			fclose ( $myFile );
			$data ['breakingNewsContentURL'] = $myFilePath;
			$breakingNews->create ( $data );
			$breakingNewsId = $breakingNews->add();
// 			dump($activityPracticeId);
// 			return;
//			doLog($_SESSION ['userId'],2,'add_allActivityPractice_Id_:_' . $activityPracticeId);
			
			$this->success ( C ( 'RELEASE_SUCCESS' ), 'allBreakingNews' );
		} catch ( Exception $e ) {
			$this->error ( C ( 'RELEASE_FAIL' ) . $e->__toString (), 'allBreakingNews' );
		}
	}
	public function editBreakingNews() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign('APPLICATION_NAME',C('APPLICATION_NAME'));
		$this->assign('USER_ID',$_SESSION ['userId']);
		$this->assign('CURRENT_MENU','BREAKINGNEWS');
		
		$breakingNews = M ( 'breakingnews' );
		$editBreakingNews = $breakingNews->where ( 'breakingNewsId=' . $_GET ['breakingnewsid'] )->find ();
		
//		doLog($_SESSION ['userId'],3,'edit_allActivityPractice_Id_:_' . $_GET ['activitypracticeid']);
		
// 		dump($editActivityPractice);
// 		return;
		
		$editor = new \FCKeditor\FCKeditor ( 'editor' );
		// 从contenturl中读取信息
		$fileName = $editBreakingNews ['breakingnewscontenturl'];
		$myFile = fopen ( $fileName, "r" ) or die ( "Unable to open file!" );
		$content = fread ( $myFile, filesize ( $fileName ) );
		fclose ( $myFile );
		$editor->Value = $content; // 设置默认值
		$editorHtml = $editor->Createhtml (); // 创建。注意：若用到模板（如smarty）则$fck = $oFCKeditor->CreateHtml();然后把$fck抛给模板
		
		$this->assign ( "editorHtml", $editorHtml );
		
		$this->assign ( 'breakingNews', $editBreakingNews );
		$this->display ();
	}
	public function editBreakingNewsSubmit() {
		if (! isset ( $_SESSION ['userId'] )) {
			$this->error ( C ( 'LOGIN_FIRST' ) );
		}
		$this->assign('APPLICATION_NAME',C('APPLICATION_NAME'));
		$this->assign('USER_ID',$_SESSION ['userId']);
		$this->assign('CURRENT_MENU','BREAKINGNEWS');
		
		$breakingNews = M ( 'breakingnews' );
		$data ['breakingNewsId'] = $_GET ['breakingnewsid'];
		$data ['breakingNewsName'] = $_POST ['breakingNewsName'];
		$data ['breakingNewsType'] = $_POST ['breakingNewsType'];
		$data ['breakingNewsMainContent'] = $_POST ['breakingNewsMainContent'];

		$myFilePath = C ( 'APPLICATION_CONTENTHTML_PATH' ) . '/' . time () . rand () . '.html';
		$myFile = fopen ( $myFilePath, "w" ) or die ( "Unable to open file!" );
		fwrite ( $myFile, $_POST ['editor'] );
		fclose ( $myFile );
		$data ['breakingNewsContentURL'] = $myFilePath;
		// $workTendency-> where('workTendencyId=' . $_GET['worktendencyid'])->setField('worktendencycontenturl',$myFilePath);
		$result = $breakingNews->save ( $data );
		
		//doLog($_SESSION ['userId'],4,'edit_allActivityPractice_Submit_Id_:_' . $_GET ['activitypracticeid']);
		
		if ($result !== false) {
			// echo U('WorkTendency/allPage');
			echo '
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					</head>
					<h1 style="line-height:400px;text-align:center">Success，auto closed after 1s</h1>
					<script language="javascript">
						function closeWindow(){
							window.opener=null;
							window.open("","_self")
							window.close();
						}
						setTimeout("closeWindow()",1000);
						
					</script>';
			// $this->success ( C ( 'EDIT_SUCCESS' ), '/WorkTendency/allPage' );
		} else {
			$this->error ( C ( 'EDIT_FAIL' ) );
		}
	}
	public function example() {
		$this->assign ( "html", $_POST ['editor'] );
		$this->display ();
	}
}
