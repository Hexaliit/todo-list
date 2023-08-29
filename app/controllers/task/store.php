<?php

use App\Core\Base;
use App\Core\Database;

if (isset($_POST)) {

    $db = Base::resolve(Database::class);

    $errors = [];

    $taskName = $_POST['task'];

    $userId = $_SESSION['user'][0];

    if (trim(strlen($taskName)) == 0 || trim(strlen($taskName)) > 191) {
        $errors[] = 'Task is required and should not be grater than 191';
    }

    if (!empty($errors)) {
        header('location: create');
        $_SESSION['taskErrors'] = $errors;
        exit();
    }

    $db->query("INSERT INTO tasks(task_name , user_id) VALUES(:task_name , :user_id) " , [
        'task_name' => $taskName ,
        'user_id' => $userId ,
    ]);

    header('location: tasks');
    $_SESSION['taskSaved'] = "New task added";
    exit();




}
