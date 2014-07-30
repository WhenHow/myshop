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
        if(file_exists(LIB_PATH.'/class/DataBase/'.$ClassName.".class.php")){
            $this->driver = new $ClassName($host,$password,$UserName,$database);
        }else
        {
            exit("we do not support $driver as database driver");
        }
    }

    public function escape($sql)
    {
       return  $this->driver->escape($sql);
    }

    public function query($sql)
    {
        return $this->driver->query($sql);
    }

    public function getAffectedRows()
    {
        return $this->driver->getAffectedRows();
    }

    public function getLastId()
    {
        return $this->driver->getLastId();
    }
} 