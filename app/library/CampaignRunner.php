<?php

use Phalcon\Http\Response;
use Phalcon\Http\Request;
include('/home/amitkewal/src/FEV/app/library/CappingService.php');
// include(APP_PATH.'/models/Campaign.php');
include('/home/amitkewal/src/FEV/app/models/Campaign.php');

class CampaignRunner
{
	public function fetchdetail()
	{
		$campaigns = new Campaign();
		$response=$campaigns->fetchDetails('Birthday Premium Teaser Mailer one day before');
		print_r($response);
		exit("[][][][]");
        //camp,segment,channel,global-setting
        $temp = array('camp_name' => 'Birthday Premium Teaser Mailer one day before','segment' => 'SEG111 NOT IN SEG113','channel' => 'mail','global-setting' => ['bounce_count'=>'3']);
        echo json_encode($temp);
		$this->processCampaign($temp);
	
	}
	public function processCampaign($campaign_data)
	{
		$checkCAP=new CappingService();
		if($checkCAP->checkCampaignCapping($campaign_data['camp_name']))
		{
			exit("AAAAAAAAAAA");
			$query=QueryBuilderService::buildESQuery($campaign_data['segment']);
		}
		else
			echo "CampaignCappingFull\n\n\n";
	
	}
	
}

$dummy=new CampaignRunner();
$dummy->fetchdetail();

?>