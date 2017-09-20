<?php

class CappingService
{
	private $redis;
	public function __construct($campaign_id,$caps)
	{
		print_r($caps);	 
		exit("AMIT\n\n");
	}
	public function isCapped($data,$channel)
	{
		print_r($data);
		exit("popo\n\n\n");
		return true;
	}
}
?>