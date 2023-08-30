<?php

function router($uri , $method) {

    if ($uri === 'register' && $method === 'GET') {
        return '../controllers/register/create.php';
    } elseif ($uri === 'register' && $method === 'POST') {
        return '../controllers/register/store.php';
    } elseif ($uri === 'login' && $method === 'GET') {
        return '../controllers/login/create.php';
    } elseif ($uri === 'login' && $method === 'POST') {
        return '../controllers/login/store.php';
    } elseif ($uri === 'tasks' && $method === 'GET') {
        return '../controllers/task/index.php';
    } elseif ($uri === 'task' && $method === 'GET') {
        return '../controllers/task/show.php';
    } elseif ($uri === 'create' && $method === 'GET') {
        return '../controllers/task/create.php';
    } elseif ($uri === 'store' && $method === 'POST') {
        return '../controllers/task/store.php';
    } elseif ($uri === 'update' && $method === 'PUT') {
        return '../controllers/task/update.php';
    } elseif ($uri === 'destroy' && $method === 'DELETE') {
        return '../controllers/task/destroy.php';
    } elseif ($uri === 'logout' && $method === 'POST') {
        return '../controllers/logout/logout.php';
    }





    else {
        require 'views/404.php';
        die();
    }
}