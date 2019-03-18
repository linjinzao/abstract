<?php

include_once('product.php');

class GraphicProduct implements Product
{
	private $mfgProduct;

	public function getProperties()
	{
		$this->mfgProduct = "This is Graphic";
		return $this->mfgProduct;
	}
}