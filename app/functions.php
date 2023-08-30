<?php

function dd($value)
{
    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();
}

function authorize($userId, $taskUserId)
{
    if ($userId != $taskUserId) {
        require BASE_PATH.'\\app\\views\\'."unauthorize.php";
//        require 'views/unauthorize.php';
        die();
    }
}

function view($view, $attributes = [])
{
    extract($attributes);
    require BASE_PATH.'\\app\\views\\'.$view.".php";
    die();
}
