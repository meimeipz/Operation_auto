<?php
/**
 * Created by PhpStorm.
 * User: gaius
 * Date: 2017/2/22
 * Time: 17:09
 */

namespace Home\Controller;
use Home\Model\UserModel;
use Think\Controller;

class UserController extends Controller{

	public function login(){

		//将用户名及密码传输到后台
		$userName=$_POST['userName'];
		$passWord=$_POST['passWord'];

		//echo $userName,$passWord;

		if(empty($userName)||empty($passWord)){
			$this->error('用户名或密码不能为空！');
		}

		$passWord_Md5=md5($passWord);	

		$model=new UserModel();
		$result=$model->userCheck($userName,$passWord_Md5);
		if($result){
			$this->success('登录成功','index.php?c=index&a=main');
		}else{
			$this->error('用户名及密码错误！');
		}
		
	}

	public function register(){

		//将前台信息传输到后台
		$userName=$_POST['userName'];
		$passWord=$_POST['passWord'];
		$repassWord=$_POST['repassWord'];
		$email=$_POST['email'];

		if(!isset($userName)||!isset($passWord)||!isset($repassWord)||!isset($email)){
			$this->error('信息不能为空！');
		}

		if($passWord!=$repassWord){
			$this->error('密码填写错误!');
		} 

		$model=new UserModel();
		$result=$model->userCheck($userName,$passWord);
		if($result){
			$this->error('用户已存在！');
		}else{
			$model->register($userName,$passWord,$email);
			$this->success('登录成功','Index/login');
		}
	}

}