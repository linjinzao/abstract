<?php

include_once("IProduct.php");
include_once("config.php");
include_once("ConnectException.php");



class MysqliProduct implements IProduct
{
    //mysqli生产者的具体实现

    public static function getConnect()
    {
        $config['mysql'] = [
            'HOST'=>'127.0.0.1',
            'USER'=>'root',
            'PASS'=>'root',
            'DBNAME'=>'tp5'
        ];
        $con = new mysqli($config['mysql']['HOST'],$config['mysql']['USER'],$config['mysql']['PASS']);
        if($con->connect_error){
            throw new ConnectException($con->connect_error);
        }
        return $con;
    }
}