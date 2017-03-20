<?php
/**
 * Created by PhpStorm.
 * User: gaius
 * Date: 2017/2/22
 * Time: 9:27
 * 产品信息模型
 */
namespace Home\Model;
use Think\Model;

class UserModel extends \Think\Model{

 	/**
 	 * 检查用户登录信息
 	 */
 	public function userCheck($userName,$passWord){

 		$model=M('user');
 		$result=$model->WHERE("userName='$userName' AND passWord='$passWord'")->select();

 		//dump($result);
 
 		if(!empty($result)){
 			return true;		
 		}else{
 			return false;
		}

 	}

 	//用户注册
 	public function register($userName,$passWord,$email){

 		$model=M('user');
 		$data['userName']=$userName;
 		$data['passWord']=$passWord;
 		$data['email']=$email;
 		$data['create_at']=$time();
 		$date['level']=$level;
 		$model->add($data);

 	}

}
