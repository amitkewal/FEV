<?php

use Phalcon\Http\Response;
use Phalcon\Http\Request;
include('/home/amitkewal/src/FEV/app/library/CappingService.php');
// include(APP_PATH.'/models/Campaign.php');
include('/home/amitkewal/src/FEV/app/models/Campaign.php');

class CampaignRunner
{
	private $campaign_id;
	private $channel;
	private $time_zone;
	public function __construct($campaign_id,$channel,$time_zone)
	{
		$this->campaign_id=$campaign_id;
		$this->channel=$channel;
		$this->time_zone=$time_zone;
	}

	public function fetchDetail()
	{
		$campaigh_info=new Campaign();
		var_dump($campaigh_info->find());
		exit("popopoo\n\n\n");
		// $campaigns = new Campaign();
		// $response=$campaigns->fetchDetails('Dummy');
		// print_r($response);
		// exit("[][][][]");
        //camp,segment,channel,global-setting
        $temp = array('camp_name' => 'Birthday Premium Teaser Mailer one day before','segment' => 'SEG111 NOT IN SEG113','channel' => 'mail','global-setting' => ['bounce_count'=>'3']);
        echo json_encode($temp);
		return $this->processCampaign($temp);
	
	}
	public function processCampaign($campaign_data)
	{
		$checkCAP=new CappingService();
		if($checkCAP->checkCampaignCapping($campaign_data['camp_name']))
		{
			return("BDAE");
			// exit("AAAAAAAAAAA");
			// $query=QueryBuilderService::buildESQuery($campaign_data['segment']);
		}
		else
			echo "CampaignCappingFull\n\n\n";
		 	return("CampaignCappingFull");
	
	}
	
}


?>