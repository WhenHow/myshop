<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-7-30
 * Time: 下午7:05
 */

class controller {

    protected $registry;
    public function __construct()
    {
        $this->$registry = registry::getInstance();
    }

    public function __get($key)
    {
        $this->registry->get($key);
    }

    public function __set($key,$value)
    {
        $this->registry->set($key,$value);
    }

} 