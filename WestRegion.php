<?php

include_once("IAbstract.php");

class WestRegion extends IAbstract
{

	protected function giveCost()
	{
		$solarSavings = 2;
		$this->valueNow = 210.54/$solarSavings;
		return $this->valueNow;
	}

	protected function giveCity()
	{
		return "Rattlesnake Gulch";
	}
}