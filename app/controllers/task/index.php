<?php


use App\Core\Base;
use App\Core\Database;

if (isset($_SESSION['user'])) {

    $db = Base::resolve(Database::class);

    $tasks = $db->query("SELECT task_id,task_name,done FROM tasks WHERE user_id =:user_id", [
        'user_id' => $_SESSION['user'][0],
    ])->get();

    view('task/index' , [
        'tasks' => $tasks
    ]);

} else {
    $_SESSION['loginNeeded'] = 'You Should Login To Access This Page';
    header('location: /todolist/login');
    exit();
}
