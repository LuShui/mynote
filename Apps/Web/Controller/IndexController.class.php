<?php
namespace Web\Controller;
use Think\Controller;
class IndexController extends Controller {

	//显示首页模板
    public function index(){
    	$this->display();
    }

    //获取首页数据
    public function homesoure(){
    	$page = I('post.pageindex');
        $pagecount = 15;
        $pageindex = $page * $pagecount;

        $sql = "SELECT notetable.*,typetable.title as typename FROM notetable LEFT JOIN  typetable ON notetable.type=typetable.id where ishow=1 ORDER BY addtime desc LIMIT %d,$pagecount;";
    	$list = M()->query($sql,$pageindex);

    	if ($list) {
    		$backarr = array(
    			'code'=>1,
    			'ctn'=>$list
    		);
    	}else{
    		$backarr = array(
    			'code'=>0
    		);
    	}
    	echo json_encode($backarr);
    }


    public function detil(){
        $id = I('get.id');
        $json = M('notetable')->where("id=$id")->find();
        $this->assign('json',$json);
        $this->assign('html',htmlspecialchars_decode($json['ctn']));
        $this->display();
    }
}