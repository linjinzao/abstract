<?php

class Video extends IComponent
{
	public function __construct(IComponent $siteNow)
	{
		$this->site = $siteNow;
	}
	public function getSite()
	{
		$fmat = "<br/> &nbsp;&nbsp; Video";
		return $this->site->getSite().$fmat;
	}
	public function getPrice()
	{
		return 300 +$this->site->getPrice();
	}
}