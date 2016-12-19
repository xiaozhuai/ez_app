<?php

/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 下午7:09
 */
class TestController extends EZController
{
    public function index(){
        $this->getView()->route = "manager/test.index";
        $this->getView()->render();
    }

    public function test(){
        $this->getView()->route = "manager/test.test";
        $this->getView()->render();
    }

    private function test2(){
        echo "manager/test.test2";
    }

}