<?php
/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/19
 * Time: 上午11:36
 */

require_once __DIR__ . "/vendor/ez/autoload.php";

EZ()->session(true);        //if enable session support

EZ()->init(__DIR__);        //init framework in cur dir

EZ()->errView(__DIR__ . "/views_php/err.phtml");        //define the err page view tpl

EZ()->config(                                           //load configs
    include __DIR__ . "/conf/main.config.php",
    include __DIR__ . "/conf/db.config.php",
    include __DIR__ . "/conf/php_view_engine.config.php"
);

EZ()->mvc(                                              //define the mvc path
    __DIR__ . "/models",
    __DIR__ . "/views_php",
    __DIR__ . "/controllers"
);

EZ()->routeRules(include __DIR__ . "/conf/route.config.php");

EZ()->library(__DIR__ . "/lib");                        //define the user class lib, will be automatically included


EZ()->preRun(function(){
    assert(1+1==2);  //do something before run
});

EZ()->run();                                            //let's go
