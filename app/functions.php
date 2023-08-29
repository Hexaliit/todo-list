<?php

function dd($value) {

    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();

}

function authorize($userId , $taskUserId) {

    if ($userId != $taskUserId) {
        require 'views/unauthorize.php';
        die();
    }
}

function view($view , $attributes = []) {
    extract($attributes);
    require basePath().'\\views\\'.$view.".php";
    die();
}

function basePath() {
    return __DIR__;
}
