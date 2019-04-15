<?php

//数据库连接的抽象类

abstract class Creator
{
    //数据库连接的具体方法
    protected abstract function factoryMethod();

    //统一返回
    public function startFactory()
    {
        $con = $this->factoryMethod();
        return $con;
    }
}