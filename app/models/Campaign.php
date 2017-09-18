<?php
use Phalcon\Mvc\Collection;

class Campaign extends Collection
{
    public function initialize()
    {
        // exit("popopo");
        $this->setSource("campaign");
    }
    public function fetchDetails($campaign_id)
    {
        //camp,segment,channel,global-setting
        $robots = Campaign::find([array ('campaign_schema.name' => "$campaign_id",),]);

        print_r($robots);
    }
}
?>