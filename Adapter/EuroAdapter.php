<?php

include_once("Eurocalc.php");
include_once("Itarget.php");

class EuroAdapter extends EuroCalc implements ITarget
{
	public function __construct()
	{
		$this->requester();
	}
	function requester()
	{
		$this->rete =.9111;
		return $this->rate;
	}
}