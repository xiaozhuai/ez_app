<?php
/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/14
 * Time: 下午7:21
 */
return array(
    "DB_DSN"                          => "mysql:host=localhost;port=3306;dbname=ez_pdo",
    "DB_USER"                         => "root",
    "DB_PWD"                          => "root",
    "DB_OPTIONS"                      => array(
                                             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                                         )
);