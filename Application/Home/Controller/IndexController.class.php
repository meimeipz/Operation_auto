<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ProductModel;
class IndexController extends Controller {
    public function index(){
    	//默认定位到前台登录首页
        $this->display('index:login');
        //$this->show("hello world");
    }

    public function register(){

    	$this->display('index:register');
    }


    public function getProduct(){

    	$model =M('product');
		$count= $model->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $model->limit($Page->firstRow.','.$Page->listRows)->select();

		//dump($list);
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
    }

    public function init(){
 		$this->getProduct(); 	
    }

    public function main(){

    	$this->init();
    	$this->display('index:main');
    }
}