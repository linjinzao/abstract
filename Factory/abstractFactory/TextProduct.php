<?php

//include_once("FormatHelper.php");

include_once('Product.php');

class TextProduct implements Product
{
	private $mfgProduct;
	private $FormatHelper;

	public function getProperties()
	{
		// $this->FormatHelper = new FormatHelper();
		// $this->mfgProduct = $this->FormatHelper->addTop();

		$this->mfgProduct = "this new textProduct";

		return  $this->mfgProduct;
	}
}