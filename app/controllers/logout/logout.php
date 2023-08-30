<?php

if ($_SESSION['user']) {
    unset($_SESSION['user']);
    header('location: login');
    exit();
}