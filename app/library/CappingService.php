<?php
class CappingService
{
	private $redis;
	public function __construct()
	{
		$this->redis = new Redis(); 
		$this->redis->connect('10.10.0.18', 6379);
		echo "Connection to server sucessfully"; 
		echo "Server is running: ".$this->redis->ping();
	}
	public function checkCampaignCapping($key)
	{
		//check whether server is running or not 
		echo "\n\n\n$key\n\n\n";
		if(!$this->redis->exists($key)){
			$this->redis->set($key,5);	
			$now = time(NULL);
			$this->redis->expireAt($key, $now + 86400);
		}
		else
		{
			$redis_count = $this->redis->get($key);
			$this->redis->decr($key);
		}
		if($redis_count>0)
			return true;
		else
			return false;
	}
	public function checkMemberCapping()
	{
		//check whether server is running or not 
		echo "\n\n\n$key\n\n\n";
		if(!$this->redis->exists($key)){
			$this->redis->set($key,5);	
			$now = time(NULL);
			$this->redis->expireAt($key, $now + 86400);
		}
		else
		{
			$redis_count = $this->redis->get($key);
			$this->redis->decr($key);
		}
		if($redis_count>0)
			return true;
		else
			return false;
	}
}
?>