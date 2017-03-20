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

class ProductModel extends \Think\Model{

    /**
     * 用于显示推荐产品
     */
    public function getAllData(){
       //实例化product对象
        $model =M('product');
        $result=$model->select();
        return $result;
    }

    //分页实现

    public function pageList($url){

        $model =M('product'); // 实例化product对象

        $count = $model->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->limit($Page->firstRow.','.$Page->listRows)->select();
        //$list = $model->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();
        //$this->assign('list',$list);// 赋值数据集
        //$this->assign('page',$show);// 赋值分页输出
        //$this->display($url); // 输出模板

    }

}