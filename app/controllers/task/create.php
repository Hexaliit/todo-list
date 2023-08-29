<?php

if (isset($_SESSION['user'])) {
    view('task/create');
} else {
    $_SESSION['loginNeeded'] = 'You Should Login To Access This Page';
    header('location: /todolist/login');
    exit();
}
