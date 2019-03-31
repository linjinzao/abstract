<?php


/*货币兑换-累加所有的价格-*/
class EuroCalc
{

	private $eour;
	private $product;
	private $service;
	public $rate = 1;

	public function requestCalc($productNow,$serviceNow)
	{
		$this->product = $productNow;
		$this->service = $serviceNow;
		$this->eour = $this->product + $this->service;
		return $this->requestTotal();
	}
	public function requestTotal()
	{
		$this->eour *= $this->rate;
		return $this->eour;
	}
}