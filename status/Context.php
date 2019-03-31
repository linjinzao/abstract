<?php

class Context
{
	private $offStatus;
	private $onStatus;
	private $currentStatus;

	public function __construct()
	{
		$this->offStatus = new OffState($this);
		$this->onStatus = new OnState($this);
		$this->currentStatus = $this->offStatus;
	}

	public function turnOnLight()
	{
		$this->currentStatus->turnLightOn();
	}

	public function turnOffLight()
	{
		$this->currentStatus->turnLightOff();
	}

	public function setStatus(IState $state)
	{
		$this->currentStatus = $state;
	}

	public function getOnStatus()
	{
		return $this->onStatus;
	}

	public function getOffStatus()
	{
		return $this->offStatus;
	}
}