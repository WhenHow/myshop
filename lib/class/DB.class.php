<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-7-30
 * Time: 上午10:19
 */

class DB {
    private $driver;
    public function __construct($driver,$host,$password,$UserName,$database)
    {
        $ClassName = 'DB'.$driver;
        if(file_exists(LIB_PATH.'/class/DataBase/'.$ClassName.'php')){
            $this->driver = new $ClassName($host,$password,$UserName,$database);
        }



    }
} 