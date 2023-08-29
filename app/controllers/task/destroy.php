<?php

use App\Core\Database;
use App\Core\Base;


$userId = $_SESSION['user'][0];

$taskId = $_POST['id'];

$db = Base::resolve(Database::class);

$task = $db->query("SELECT * FROM tasks where task_id = :task_id" , [
    'task_id' => $taskId
])->find();

if ($task) {
    authorize($userId , $task['user_id']);
    $db->query("DELETE FROM tasks where task_id = :task_id" , [
       'task_id' => $taskId
    ]);
    $_SESSION['taskSaved'] = 'Task deleted successfully';
    header('location: tasks');
    exit();

} else {
    view(404);
}