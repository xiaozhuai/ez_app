<?php
/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 上午11:36
 */

require_once "/Users/xiaozhuai/work/Twig-1.29.0/lib/Twig/Autoloader.php";
require_once "/Users/xiaozhuai/work/ez/autoload.php";

EZ()->init(__DIR__);

//register twig view engine
Twig_Autoloader::register();

//cause twig cannot use static file path, so set views root dir for twig to use relative path
EZGlobal()->TWIG_FILESYSTEM = __DIR__ . "/views_twig";

//set some argument for twig, the "__DIR__/twig_files" dir should be writeable,
//for more infomation, visit http://twig.sensiolabs.org/
$loader = new Twig_Loader_Filesystem(EZGlobal()->TWIG_FILESYSTEM);
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . "/twig_files",
));

EZ()->viewEngine($twig);

//EZ()->errView(__DIR__ . "/views_twig/err.html");

EZ()->config(
    include __DIR__ . "/conf/main.config.php",
    include __DIR__ . "/conf/db.config.php",
    include __DIR__ . "/conf/twig_view_engine.config.php"
);

EZ()->mvc(
    __DIR__ . "/models",
    __DIR__ . "/views_twig",
    __DIR__ . "/controllers"
);

EZ()->library(__DIR__ . "/lib");

EZ()->tool(__DIR__ . "/tool");

EZ()->run();
