<?php


use App\Core\Database;
use App\Core\Base;

$db = Base::resolve(Database::class);

$userName = $_POST['user_name'];
$password = $_POST['pass'];

$errors = [];

if (trim(strlen($userName) , " ") == 0 || trim(strlen($userName) , " ") > 191) {
    $errors[] = 'User Name Should Not Be Null Or Grater Than 191 Chars';
}
if (trim(strlen($password) , " ") == 0 || trim(strlen($password), " ") > 10) {
    $errors[] = 'Password Should Not Be Null Or Grater Than 10 Chars';
}

if (!empty($errors)) {
    $_SESSION['registerErrors'] = $errors ;
    header( 'location: register');
    exit();
}


$db->query("INSERT INTO users(user_name , password) VALUES (:user_name , :password)" , [
    'user_name' => $userName ,
    'password' => password_hash($password , PASSWORD_BCRYPT)
]);



$_SESSION['loginNeeded'] = 'Successful Registration. Please Log In' ;
header( 'location: login');
exit();
