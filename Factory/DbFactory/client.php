<?php

include_once('DbFactory.php');
class client 
{
    public function __construct()
    {
        $mysqlCon = new DbFactory('mysql');
        //$mysqliCon = new DbFactiry('mysqli');

        var_dump($mysqlCon->startFactory());
    }
}

new client();