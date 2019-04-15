<?php

include_once('Creator.php');
include_once('MysqliProduct.php');
include_once('MysqlProduct.php');
class DbFactory extends Creator
{
    //mysql工厂的具体实现   可能是mysql 与mysqli
    protected function factoryMethod($type="mysqli")
    {
        switch($type){
            case "mysqli":
                return mysqliProduct::getConnect();
                break;
            case "mysql":
                return mysqlProduct::getConnect();
        }
    }
}