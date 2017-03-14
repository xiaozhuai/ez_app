<?php
/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 上午11:36
 */

require_once __DIR__ . "/vendor/smarty/libs/Smarty.class.php";
require_once __DIR__ . "/vendor/ez/autoload.php";

EZ()->init(__DIR__);

$smarty = new Smarty();
//set some argument for smarty, the "__DIR__/cache/smarty" dir should be writeable,
//for more infomation, visit http://www.smarty.net/
$smarty->setCompileDir(__DIR__ . "/cache/smarty/compile");
$smarty->setConfigDir(__DIR__ . "/cache/smarty/conf");
$smarty->setCacheDir(__DIR__ . "/cache/smarty/cache");

EZ()->viewEngine($smarty);

//EZ()->errView(__DIR__ . "/views_smarty/err.tpl");

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

EZ()->run();
