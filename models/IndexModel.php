<?php

/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/20
 * Time: 上午1:50
 */
class IndexModel extends EZSql
{

    function __construct(){
        parent::__construct("PKU");
    }

    public function test(){
        echo "<br><hr><br>";
        var_dump($this->insert(
            [
                "name" => "aaa"
            ]
        ));
        echo "<br><hr><br>";
        var_dump($this->insert(
            [
                "name" => "aaa'"
            ]
        ));
        echo "<br><hr><br>";
        var_dump($this->insert(
            [
                "name" => "aaa\""
            ]
        ));
        echo "<br><hr><br>";
        var_dump($this->insert(
            [
                "name" => "bbb\\"
            ]
        ));
        echo "<br><hr><br>";
        var_dump($this->insert(
            [
                "name" => "ccc"
            ]
        ));
        echo "<br><hr><br>";
        var_dump($this->getAll());
        echo "<br><hr><br>";
        var_dump($this->update(
            [
                "name" => "ccc_new"
            ],
            sprintf("`name`='ccc'")
        ));
        echo "<br><hr><br>";
        var_dump($this->getAll());
        echo "<br><hr><br>";
        var_dump($this->del(sprintf("`name`='aaa'")));
        echo "<br><hr><br>";
        var_dump($this->getAll());
        echo "<br><hr><br>";
        var_dump($this->getOneRow());
        echo "<br><hr><br>";
        var_dump($this->getAllRowsOneField("`name`"));
        echo "<br><hr><br>";
        var_dump($this->getOneRowOneField("`name`"));
    }

}