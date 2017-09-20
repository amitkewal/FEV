<?php

include('/home/amitkewal/src/FEV/app/library/CampaignRunner.php');

class ExampleTest extends \Codeception\TestCase\Test
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

        // $user=CampaignRunner::fetchdetail();
        $user= new CampaignRunner();
        $result=$user->fetchdetail();

        $this->assertEquals('BDAE', $result);
        


        // exit("+++");
        // $result = null;
        // $this->assertFalse("false");

        // $result = 'toolooooongnaaaaaaameeee';
        // $this->assertFalse("false");

        // $result = 'BDAE';
        // $this->assertTrue("true");
    }
}