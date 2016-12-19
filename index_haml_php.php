<?php
/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 上午11:36
 */

require_once "/Users/xiaozhuai/work/MtHaml-master/lib/MtHaml/Autoloader.php";
require_once "/Users/xiaozhuai/work/ez/autoload.php";

//register haml view engine
MtHaml\Autoloader::register();

EZ()->init(__DIR__);

$haml = new MtHaml\Environment('php');
//set some argument for haml with php, the "__DIR__/haml_php_files" dir should be writeable,
//for more infomation, visit https://github.com/arnaud-lb/MtHaml
$hamlPhp = new MtHaml\Support\Php\Executor($haml, array(
    'cache' => __DIR__ . "/haml_php_files",
));

EZ()->viewEngine($hamlPhp);

//EZ()->errView(__DIR__ . "/views_haml_php/err.tpl");

EZ()->config(
    include __DIR__ . "/conf/main.config.php",
    include __DIR__ . "/conf/db.config.php",
    include __DIR__ . "/conf/haml_php_view_engine.config.php"
);

EZ()->mvc(
    __DIR__ . "/models",
    __DIR__ . "/views_haml_php",
    __DIR__ . "/controllers"
);

EZ()->library(__DIR__ . "/lib");

EZ()->tool(__DIR__ . "/tool");

EZ()->run();