<?php


class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // public function _after(AcceptanceTester $I)
    // {
    // }

    // // tests
    // public function tryToTest(AcceptanceTester $I)
    // {
    //     echo "poopop";
    // }
     public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('FEV');  
    }
}
