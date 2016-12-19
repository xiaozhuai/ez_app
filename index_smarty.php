<?php
/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 上午11:36
 */

require_once "/Users/xiaozhuai/work/smarty-3.1.30/libs/Smarty.class.php";
require_once "/Users/xiaozhuai/work/ez/autoload.php";

EZ()->init(__DIR__);

$smarty = new Smarty();
$smarty->setCompileDir(__DIR__ . "/smarty/compile");
$smarty->setConfigDir(__DIR__ . "/smarty/conf");
$smarty->setCacheDir(__DIR__ . "/smarty/cache");

EZ()->viewEngine($smarty);

EZ()->errView(__DIR__ . "/views_smarty/err.tpl");

EZ()->config(
    include __DIR__ . "/conf/main.config.php",
    include __DIR__ . "/conf/db.config.php",
    include __DIR__ . "/conf/smarty_view_engine.config.php"
);

EZ()->mvc(
    __DIR__ . "/models",
    __DIR__ . "/views_smarty",
    __DIR__ . "/controllers"
);

EZ()->library(__DIR__ . "/lib");

EZ()->tool(__DIR__ . "/tool");

EZ()->run();
