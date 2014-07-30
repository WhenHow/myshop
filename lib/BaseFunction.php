<?php
/**
 * Created by PhpStorm.
 * User: xwh
 * Date: 14-7-25
 * Time: 下午7:47
 */

function __autoload($class)
{
    $ClassFileName = $class.'.class.php';

    if(file_exists(LIB_CLASS_PATH.'/DataBase/'.$ClassFileName))
    {
        require_once(LIB_CLASS_PATH.'/DataBase/'.$ClassFileName);
    }
}