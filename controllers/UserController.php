<?php

/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 下午7:06
 */
class UserController extends EZController
{

    public function index(){
        $this->getView()->route = "user.index";
        $this->getView()->render();
    }

    public function info(){
        $this->getView()->route = "user.info";
        $this->getView()->render();
    }

}