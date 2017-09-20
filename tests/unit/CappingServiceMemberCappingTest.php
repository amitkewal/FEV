<?php
include('/home/amitkewal/src/FEV/app/library/CappingService.php');
class CappingServiceMemberCappingTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $caps;
    protected $userData;
    protected $campaignData;

    protected function _before()
    {
        $this->userData = array(
            "SH123" => array("email" => 5, "sms" => 3, "push" => 9)
        );
        $this->caps = array(
            "SH123" => array("email" => 5, "sms" => 11, "push" => 11)
        );
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $capService = new CappingService("SH123", $this->caps);
        $this->assertTrue($capService->isCapped($this->userData['SH123'],"email"));
        $this->assertTrue($capService->isCapped($this->userData['SH123'],"sms"));
        $this->assertTrue($capService->isCapped($this->userData['SH123'],"push"));
    }
}