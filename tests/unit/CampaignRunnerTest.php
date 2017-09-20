<?php
include('/home/amitkewal/src/FEV/app/library/CampaignRunner.php');
class CampaignRunnerTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $cap_runner = new CampaignRunner("Dummy","mail","tz");
        $cap_runner->fetchDetail();
    }
}