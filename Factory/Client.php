<?php

include_once('TextFactory.php');

include_once('GraphicFactory.php');

class Client
{

	private $someGraphicObject;
	private $someTextObject;

	public function __construct()
	{
		$this->someTextObject = new TextFactory();
		$this->someGraphicObject = new GraphicFactory();

		echo $this->someGraphicObject->startFactory();
		echo '<br \>';
		echo $this->someTextObject->startFactory();
	}
}

new Client();