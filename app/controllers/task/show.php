<?php

use App\Core\Database;
use App\Core\Base;


$task = $_GET['id'];

$db = Base::resolve(Database::class);

$task = $db->query("SELECT * FROM tasks WHERE task_id =:task_id" , [
    'task_id' => $task
])->find();

if ($task) {
    if (isset($_SESSION['user'])) {
        authorize($_SESSION['user'][0] ,$task['user_id']);
        view('task/show' , [
            'task' => $task
        ]);
    } else {
        $_SESSION['loginNeeded'] = 'You Should Login To Access This Page';
        header('location: /todolist/login');
        exit();
    }
} else {
    view(404);
}



