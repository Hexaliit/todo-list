<?php


use App\Core\Database;
use App\Core\Base;


$db = Base::resolve(Database::class);

$userName = $_POST['user_name'];
$password = $_POST['pass'];

$errors = [];

if (trim(strlen($userName)) == 0 || trim(strlen($userName)) > 191) {
    $errors[] = 'User Name Should Not Be Null Or Grater Than 191 Chars';
}
if (trim(strlen($password)) == 0 || trim(strlen($password)) > 10) {
    $errors[] = 'Password Should Not Be Null Or Grater Than 10 Chars';
}



$user = $db->query("SELECT * FROM users WHERE user_name =:user_name", [
    'user_name' => $userName,
])->find();


if ($user) {
    if (password_verify($password , $user['password'])) {
        $_SESSION['user']= [$user['user_id'] , $user['user_name']];
        header('location: /todolist/tasks');
        exit();
    } else {
        $errors[] = 'Invalid username  or password';
    }

} else {
    $errors[] = 'Invalid username  or password';
}

//implement session loginerrors
if (!empty($errors)) {
    $_SESSION['loginErrors']= $errors;
    header('location: /todolist/login');
    exit();
}

