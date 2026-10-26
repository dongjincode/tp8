<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
	public function index()
	{
	    echo "这是第三次测试";
	    echo "第二次测试";
	    return "这是新首页，测试jenkins";
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
