<?php



session_start();

require '../../vendor/autoload.php' ;


require '../bootstrap.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$uri = explode('/' , $uri)[2];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

require router($uri , $method);



