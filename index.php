<?php
/**
 * Created by PhpStorm.
 * User: xwh
 * Date: 14-7-25
 * Time: 下午7:51
 */
require_once('config.php');
require_once(LIB_PATH.'/BaseFunction.php');
$hehe = new DB('Mysqli',DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$result = $hehe->query('select * from oc_setting');