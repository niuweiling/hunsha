<?php


namespace app\admin\controller;


use think\Controller;
use think\Session;

class Bace extends Controller
{
	//验证桥梁
	public function _initialize()
	{
		parent::_initialize(); // TODO: Change the autogenerated stub
	    if (!Session::has('user')){
	    	$this->error('请登录','admin/login/index');//跳转 登录页面
	    	exit();
	    }
	}

}