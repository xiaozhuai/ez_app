<?php

/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 下午6:35
 */
class IndexController extends EZController
{
    public function index(){
        $this->getView()->name = "EZer";
        $this->getView()->view_engine = EZConfig()->VIEW_ENGINE;
        $this->getView()->render();
//        EZ()->loadModel("/Index");
//        $model = new IndexModel();
//        $model->test();
    }

}