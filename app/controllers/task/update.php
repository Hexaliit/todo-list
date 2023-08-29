<?php

use App\Core\Database;
use App\Core\Base;

$taskName = $_POST['task_name'];

$db = Base::resolve(Database::class);

$taskId = $_POST['id'];

$userId = $_SESSION['user'][0];

$errors = [];

if (trim(strlen($taskName)) == 0 || trim(strlen($taskName)) > 191) {
    $errors[] = 'Task is required and should not be grater than 191';
}

$task = $db->query("SELECT * FROM tasks where task_id=:task_id" , [
    'task_id' =>$taskId
])->find();

if ($task) {
    authorize($userId ,$task['user_id']);
    if (!empty($errors)) {
        header('location: create');
        $_SESSION['taskErrors'] = $errors;
        exit();
    } else {
        $db->query("UPDATE tasks SET task_name = :task_name where task_id = :task_id" , [
            'task_name' => $taskName ,
            'task_id' => $taskId
        ]);
        header('location: tasks');
        $_SESSION['taskSaved'] = 'Task updated successfully';
        exit();
    }
} else {
    view(404);
}