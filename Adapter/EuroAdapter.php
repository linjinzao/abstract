<?php

include_once("EuroCalc.php");
include_once("Itarget.php");

class EuroAdapter extends EuroCalc implements ITarget
{
	public function __construct()
	{
		$this->requester();
	}
	function requester()
	{
		$this->rete =.8111;
		return $this->rate;
	}
}