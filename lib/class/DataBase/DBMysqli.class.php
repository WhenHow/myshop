<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-7-25
 * Time: 下午7:45
 */

class DBMysqli {
    private $link;
    public function __construct($HostName, $UserName, $password, $database)
    {
        $this->link = new mysqli($HostName,$UserName,$password,$database);
        if(mysqli_connect_errno())
        {
            throw new ErrorException('cant connect database'.'('.mysqli_connect_errno().')'.mysqli_connect_error());
            exit();
        }

        $this->link->set_charset('utf8');
        $this->link->query("SET SQL_MODE = ''");
    }

    public function query($sql)
    {
        $query = $this->link->query($sql);
        if($this->link->errno){
            throw new ErrorException('a query error occur'.'('.$this->link->errno.')'.'on sql '.$sql);
            exit();
        }else
        {

            if(isset($query->num_rows)){
                $data = array();
                while($row = $query->fetch_assoc())
                {
                    $data[] = $row;
                }

                $ret = new stdClass();
                $ret->row = isset($data[0])?$data[0]:array();
                $ret->rows = $data;
                $ret->num_rows = $query->num_rows;

                $query->close();

                unset($data);
                return $ret;
            }else
            {
                return true;
            }
        }

    }


    public function getLastId()
    {
        return $this->link->insert_id;//返回自增列的最后一个id
    }

    /*
     * 把内容转义为sql可用的字符串 可使用本函数来预防数据库攻击
     *受影响字符
     *
     *\x00
     *\n
     *\r
     *\
     *'
     *"
     *\x1a
     *
     */
    public function escape($content)
    {
        return $this->link->real_escape_string($content);
    }

    public function __destruct()
    {
        $this->link->close();
    }

    public function getAffectedRows()
    {
        return $this->link->affected_rows;
    }
} 