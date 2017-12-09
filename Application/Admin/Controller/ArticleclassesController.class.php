<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class ArticleClassesController extends AdminController{
	public function index(){
		$articleclasses = M("articleclasses");
		$num = $articleclasses ->field('count(*) count') -> find();
		$total = $num["count"];
		$page = new \Think\Page($total,5);
		$limit = $page ->firstRow.','.$page->listRows;
		$data = $articleclasses->limit($limit)->order("acsort asc")->select(); 
		$this -> assign("page",$page->show());               
		$this -> assign("article",$data);
		$this -> assign("title",'文章分类');
		$this -> display();
	}
	//添加分类
        public function add(){
                    $articleclasses = M("articleclasses");
                    $acname = $_POST['acname'];
                    $res = $articleclasses -> where(array("acname"=>$acname)) -> field("acname") -> select();
                    if($res){
                            $this -> error("分类已存在");
                    }else{
                        if($articleclasses->create()){
                            $res = $articleclasses -> add();
                                if($res){
                                    $this -> success("添加成功","index");
                                }else{
                                    $this -> error("添加失败");
                            }
                        } 
                    } 
        }
     //修改时调用此方法
    public function mod(){
        $articleclasses = M("articleclasses");
        $data = $articleclasses ->where(array("acid"=>$_GET['acid']))->find(); 
        $this -> assign("title",'查看文章分类');
        $this -> assign("article",$data);
        $this -> display();
    }
    //修改文章分类
    public function update(){
    	$articleclasses = M("articleclasses");
    	if($articleclasses -> where(array("acid"=>$_POST['acid']))->save($_POST)){
    		$this->success('更新成功','index');
    	}else{
    		$this -> error('更新失败');
    	}
    }
    //搜索方法
    public function search(){
            $articleclasses = M("articleclasses");
            $acname = $_GET['acname'];        
            $map['acname'] = array("like","%$acname%"); 
            $num = $articleclasses -> where($map) -> field('count(*) count') -> find();
            $total = $num["count"];
            $page = new \Think\Page($total,5);
            $limit = $page ->firstRow.','.$page->listRows;
            $data = $articleclasses -> where($map) ->limit($limit) -> select();               
            $this -> assign("page",$page->show());
            $this -> assign("article",$data);
            $this -> assign("title","搜索文章分类");
            $this -> display('index'); 
    }
    //删除
    public function del(){
    	$acid = $_GET["acid"];
    	$del = M("articleclasses");
    	if($del-> delete($acid)){
            echo 1;
            return;
        }
        echo 0;
    }
    public function insert(){
        $this -> assign("title","添加文章分类");
        $this ->display();
    }
}



?>