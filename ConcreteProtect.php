<?php

include_once("ProtectVis.php");

class ConcreteProtect extends ProtectVis
{
	public function __construct()
	{
		$this->countManey();
	}
	protected function countManey()
	{
		$this->wage = "Your hourly wage is $";
		echo $this->wage.$this->setHourly(36);
	}
}

new ConcreteProtect();