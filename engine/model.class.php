<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-7-30
 * Time: 下午1:11
 */
class model {
    protected $registry;
    public function __construct()
    {
        $this->registry = registry::getInstance();
    }
    public function get($key)
    {
        return $this->registry->get($key);
    }

    public function set($key,$value)
    {
        return $this->registry->set($key,$value);
    }

    public function has($key)
    {
        return $this->registry->get($key);
    }
} 