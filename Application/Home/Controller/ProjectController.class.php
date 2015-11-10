<?php
/**
 * Created by PhpStorm.
 * User: zhangguixu
 * Date: 2015/11/10
 * Time: 16:44
 */

namespace Home\Controller;
use Think\Controller;

class ProjectController extends Controller
{
    //pfp�����Ŀ
    public function pfp(){
        $this->display();
    }
    //pst�����Ŀ
    public function pst(){
        $news=M('breakingnews');
        $color=['panel-default','panel-success','panel-primary','panel-danger','panel-info'];
        $list=$news->where('breakingnewstype=8')->select();
        $length=count($list);
        for($x=0;$x<$length;$x++){
            $list[$x]['color']=$color[$x % 5];
            $list[$x]['id']=$x;
            $list[$x]['collapse']='collapse'.$x;
            $list[$x]['href']='#collapse'.$x;
        }
        $this->assign('list',$list);
        $this->display();
    }
}