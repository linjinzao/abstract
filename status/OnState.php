<?php

class OnState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        echo "Light is already on -> take on action<br />";
    }

    public function turnLightOff()
    {
        echo "Light Off";
        $this->context->setStatus($this->context->getOffStatus());
    }
}