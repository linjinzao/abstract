<?php


class OffState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        echo "Light on";
        $this->context->setStatus($this->context->getOnStatus());
    }

    public function turnLightOff()
    {
        echo "Light is already off->take on action<br/>";
    }
}