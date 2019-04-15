<?php

class ConnectException extends Exception
{

    public function __construct($message,$code=0)
    {
        parent::__construct();
    }

    public function __toString()
    {
        return __CLASS__.":{".$this->code."}:".$this->message."<br />";
    }

    public function customFunction()
    {
        echo $this->__toString();
    }
}