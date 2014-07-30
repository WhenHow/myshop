<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-7-30
 * Time: 下午1:11
 */

class registry {
    private static $instance = null;
    public  $data = array();
    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new registry();
        }
        return self::$instance;
    }

    public function get($key)
    {
        return (isset($this->data[$key]) ? $this->data[$key] : null);
    }

    public function set($key,$value)
    {
        $this->data[$key] = $value;
    }

    public function has($key)
    {
        return isset($this->data[$key]);
    }
} 