<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/fev/campaign', array( 
   'controller' => 'campaign', 
   'action' => 'index', 
));

$router->handle();
