<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2016/12/3
 * Time: 下午7:39
 */
namespace app\index\controller;
class News
{
    public function read()
    {
        return $_GET['id'];
    }
}
