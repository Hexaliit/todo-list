<?php


use database\Database;

spl_autoload_register(function ($class){
    require str_replace('/' , '\\' , './'.$class.'.php');
});








require 'functions.php';
$config = require 'config.php';
$config = $config['Core'];

//require 'Core/Database.php';
/*require 'views/register.view.php';*/

$db = new Database($config);

$id = 1;

$users = $db->query("SELECT * FROM users WHERE user_id = :user_id" , ['user_id' => $id])->find();

var_dump($users);


