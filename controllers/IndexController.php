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
//        EZ()->loadModel("/Index");
//        $model = new IndexModel();
        $this->getView()->name = "EZer";
        $this->getView()->view_engine = EZConfig()->VIEW_ENGINE;
        $this->getView()->render();
//        echo "<br><hr><br>";
//        var_dump($model->insert(
//            [
//                "name" => "aaa"
//            ]
//        ));
//        echo "<br><hr><br>";
//        var_dump($model->insert(
//            [
//                "name" => "aaa'"
//            ]
//        ));
//        echo "<br><hr><br>";
//        var_dump($model->insert(
//            [
//                "name" => "aaa\""
//            ]
//        ));
//        echo "<br><hr><br>";
//        var_dump($model->insert(
//            [
//                "name" => "bbb\\"
//            ]
//        ));
//        echo "<br><hr><br>";
//        var_dump($model->insert(
//            [
//                "name" => "ccc"
//            ]
//        ));
//        echo "<br><hr><br>";
//        var_dump($model->getAll());
//        echo "<br><hr><br>";
//        var_dump($model->update(
//            [
//                "name" => "ccc_new"
//            ],
//            sprintf("`name`='ccc'")
//        ));
//        echo "<br><hr><br>";
//        var_dump($model->getAll());
//        echo "<br><hr><br>";
//        var_dump($model->del(sprintf("`name`='aaa'")));
//        echo "<br><hr><br>";
//        var_dump($model->getAll());
//        echo "<br><hr><br>";
//        var_dump($model->getOneRow());
//        echo "<br><hr><br>";
//        var_dump($model->getAllRowsOneField("`name`"));
//        echo "<br><hr><br>";
//        var_dump($model->getOneRowOneField("`name`"));

    }

}