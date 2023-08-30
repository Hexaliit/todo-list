<?php

const BASE_PATH = __DIR__.'/../../';

session_start();

require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . 'app/bootstrap.php';

//require '../../vendor/autoload.php' ;
//require '../bootstrap.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$uri = explode('/' , $uri)[2];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

require router($uri, $method);



