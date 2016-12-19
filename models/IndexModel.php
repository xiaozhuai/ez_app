<?php

/**
 * Created by PhpStorm.
 * User: xiaozhuai
 * Date: 16/12/20
 * Time: 上午1:50
 */
class IndexModel extends EZModel
{

    function __construct(){
        $this->setTable("PKU");            //set table used by this model, must be called before "parent::__construct()"
        parent::__construct();
    }

}