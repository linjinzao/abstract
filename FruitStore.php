<?php

include_once("IProduct.php");

class FruitStore implements IProduct
{
	public function apples()
	{
		return "FruitStore sez--We have apples.<br/>";
	}
	public function oranges()
	{
		return "FruitStore sez--We have no citrus fruit.<br/>";
	}

}