<?php

function __autoload($className)
{
    include $className.'.php';
}

class Client
{
    private $context;


    public function __construct()
    {
        $this->context = new Context();

        $this->context->turnOnLight();
        $this->context->turnOnLight();

        $this->context->turnOffLight();
        $this->context->turnOffLight();

    }
}

new Client();