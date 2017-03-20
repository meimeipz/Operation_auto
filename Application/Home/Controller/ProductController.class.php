<?php
/**
 * Created by PhpStorm.
 * User: gaius
 * Date: 2017/2/22
 * Time: 17:09
 */

namespace Home\Controller;
use Home\Model\ProductModel;
use Think\Controller;

class ProductController extends Controller{

    /**
     * 首页热门商品显示
     */
    public function getPopular(){

        $model =M('product'); // 实例化product对象

        $count = $model->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板




    }
}