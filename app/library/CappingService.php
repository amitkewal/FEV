<?php

class CappingService
{
	private $data_id,$caps;
	public function __construct($data_id,$caps)
	{
		$this->data_id=$data_id;
		$this->caps=$caps;
	}
	public function isCapped($data,$channel)
	{
		echo "$channel\\n\n\n $this->data_id\n\n";
		return($data["$channel"]<=$this->caps["$this->data_id"]["$channel"])?true:false;
	}
}
?>