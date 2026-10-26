<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
	public function index()
	{   
	    echo "这是第四次测试\n";
	    echo "这是第三次测试\n";
	    echo "第二次测试\n";
	    return "这是新首页，测试jenkins\n";
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
