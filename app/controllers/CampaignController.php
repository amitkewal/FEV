<?php
use Phalcon\Db\Adapter\Pdo\Postgresql;
use Phalcon\Http\Response;
use Phalcon\Http\Request;
class CampaignController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->disable();
    	return $this->response->setContent(json_encode(array(
        'image' =>'/img/VueTestCamplast.svg',
        'maxCount'=>'1',
        'link'=>'google.com',
        'alt'=>'test')));
		print_r($this->connection->describeColumns("posts"));
		exit("OOOOOO\n\n");
    }

}

