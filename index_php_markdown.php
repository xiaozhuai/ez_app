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

EZ()->config(                                           //load configs
    include __DIR__ . "/conf/main.config.php",
    include __DIR__ . "/conf/db.config.php",
    include __DIR__ . "/conf/php_markdown_view_engine.config.php"
);

EZ()->mvc(                                              //define the mvc path
    __DIR__ . "/models",
    __DIR__ . "/views_php_markdown",
    __DIR__ . "/controllers"
);

EZ()->library(__DIR__ . "/lib");                        //define the user class lib, will be automatically included

EZ()->viewEngine(new Parsedown());                      //the view engine instance

/**
 * $engine is set by EZ()->viewEngine($parsedown);
 * $vars
 * $path is realpath path (static path) of view tpl file
 */
EZ()->registerViewEngine("php_markdown", function ($engine, $vars, $path){
    /**
     * first, render tpl just like phtml
     */
    ob_start();
    foreach ($vars as $key => $value)
        ${$key} = $value;
    require_once $path;
    $markdown = ob_get_contents();
    ob_clean();

    /**
     * then, use Parsedown to transfer markdown to html
     */
    echo $engine->text($markdown);

});

EZ()->run();                                            //let's go
