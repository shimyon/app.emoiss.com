<?php
/* Requirements Files */
require './globals.php';

require './render.php';

require './route.php';



$requestrul = $_SERVER['REQUEST_URI'];


$requestrul = str_replace(SUB_URL, '', $requestrul);

//print_r($requestrul);

$routingParameters = routingMatch($requestrul);

// print_r($routingParameters);

// die;

require './master.php';

load_master($routingParameters);

?>