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
        $this->getView()->route = "user.index id=" . $_GET['id'];
        $this->getView()->render();
    }

    public function info(){
        $this->getView()->route = "user.info name=". $_GET['name'] . " age=" . $_GET['age'] . " sex=" . $_GET['sex'];
        $this->getView()->render();
    }

}