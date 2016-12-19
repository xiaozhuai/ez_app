<?php
/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 上午11:36
 */

require_once "/Users/xiaozhuai/work/ez/autoload.php";

EZ()->init(__DIR__);

EZ()->errView(__DIR__ . "/views_php/err.phtml");

EZ()->config(
    include __DIR__ . "/conf/main.config.php",
    include __DIR__ . "/conf/db.config.php",
    include __DIR__ . "/conf/php_view_engine.config.php"
);

EZ()->mvc(
    __DIR__ . "/models",
    __DIR__ . "/views_php",
    __DIR__ . "/controllers"
);

EZ()->library(__DIR__ . "/lib");

EZ()->tool(__DIR__ . "/tool");

EZ()->run();
