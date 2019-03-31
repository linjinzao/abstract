<?php 

include_once('EuroAdapter.php');
include_once('DollarCalc.php');
class client 
{
	private $requestNow;
	private $dollarRequest;

	public function __construct()
	{
		$this->requestNow = new EuroAdapter();
		$this->dollarRequest = new DollarCalc();

		$euro = "&#8364";
		echo "Euros:$euro ".$this->makeAdapterRquest($this->requestNow)."</br>";
		echo "Dollars:$".$this->makeDollarRequest($this->dollarRequest);
	}

	public function makeAdapterRquest(ITarget $req)
	{
		return $req->requestCalc(40,50);
	}
	public function makeDollarRequest(DollarCalc $req)
	{
		return $req->requestCalc(40,50);
	}
}

new client();