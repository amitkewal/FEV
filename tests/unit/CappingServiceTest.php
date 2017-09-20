<?php

include('/home/amitkewal/src/FEV/app/library/CappingService.php');

class CappingServiceTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $caps;
    protected $userData;

    protected function _before()
    {

        $this->userData = array(
            "CAMPAIGN" => array("email" => 5, "sms" => 3, "notification" => 9)
        );   
        $this->caps = array(
            "CAMPAIGN" => array("email" => 5, "sms" => 4, "notification" => 10)
        );
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        print_r($this->caps);
        $capService = new CappingService("CAMPAIGN", $this->caps);
        $this->assertTrue($capService->isCapped($this->userData,"email"));
        // assertFalse($capService->isCapped($this->userData,"sms"));
        // assertFalse($capService->isCapped($this->userData,"notification"));
    }
}