<?php

use App\Core\Database;

use App\Core\Container;

use App\Core\Base;


$container = new Container();

$container->bind('App\Core\Database' , function (){

    return new Database(conf());

});




//$db = $container->resolve('App\Core\Database');


Base::setContainer($container);
