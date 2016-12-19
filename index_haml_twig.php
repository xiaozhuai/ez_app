<?php
/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 上午11:36
 */

require_once "/Users/xiaozhuai/work/Twig-1.29.0/lib/Twig/Autoloader.php";
require_once "/Users/xiaozhuai/work/MtHaml-master/lib/MtHaml/Autoloader.php";
require_once "/Users/xiaozhuai/work/ez/autoload.php";

//register twig view engine
Twig_Autoloader::register();

//register haml view engine
MtHaml\Autoloader::register();

EZ()->init(__DIR__);

//cause twig cannot use static file path, so set views root dir for twig to use relative path
EZGlobal()->TWIG_FILESYSTEM = __DIR__ . "/views_haml_twig";

//set some argument for twig, the "__DIR__/twig" dir should be writeable,
//for more about twig, visit http://twig.sensiolabs.org/
$loader = new Twig_Loader_Filesystem(EZGlobal()->TWIG_FILESYSTEM);
$hamlTwig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . "/haml_twig_files",
));

$haml = new MtHaml\Environment('twig', array('enable_escaper' => false));

// Use a custom loader, whose responsibility is to convert HAML templates
// to Twig syntax, before handing them out to Twig:
$hamlLoader = new MtHaml\Support\Twig\Loader($haml, $hamlTwig->getLoader());

$hamlTwig->setLoader($hamlLoader);

$hamlTwig->addExtension(new MtHaml\Support\Twig\Extension());

EZ()->viewEngine($hamlTwig);

//EZ()->errView(__DIR__ . "/views_haml_php/err.tpl");

EZ()->config(
    include __DIR__ . "/conf/main.config.php",
    include __DIR__ . "/conf/db.config.php",
    include __DIR__ . "/conf/haml_twig_view_engine.config.php"
);

EZ()->mvc(
    __DIR__ . "/models",
    __DIR__ . "/views_haml_twig",
    __DIR__ . "/controllers"
);

EZ()->library(__DIR__ . "/lib");

EZ()->tool(__DIR__ . "/tool");

EZ()->run();