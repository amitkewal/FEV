<?php
include('/home/amitkewal/src/FEV/app/library/CappingService.php');
class CappingServiceCampaignCappingTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $caps;
    protected $campaignData;

    protected function _before()
    {
        $this->campaignData = array(
            "CAMPAIGN" => array("user_level_cap" => 500)
        );
        $this->caps = array(
            "CAMPAIGN" => array("user_level_cap" => 500)
        );
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $capService = new CappingService("CAMPAIGN", $this->caps);
        $this->assertTrue($capService->isCapped($this->campaignData['CAMPAIGN'],"user_level_cap"));
    }
}