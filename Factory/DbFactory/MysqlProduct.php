<?php

include_once("IProduct.php");
include_once("config.php");
include_once("ConnectException.php");
class MysqlProduct implements IProduct
{
    public  static function getConnect()
    {
        //TODO 改成配置文件
        $config['mysql'] = [
            'HOST'=>'127.0.0.1',
            'USER'=>'root',
            'PASS'=>'root',
            'DBNAME'=>'tp5'
        ];
        $con = mysql($config['mysql']['HOST'],$config['mysql']['USER'],$config['mysql']['PASS']);
        if($con->connect_error){
            throw new ConnectException($con->connect_error);
        }
        return $con;
    }
}