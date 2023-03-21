<?php
// $username = $_POST['username'];
// $password = $_POST['password'];

$username = filter_input(INPUT_POST , 'username');
$password = filter_input(INPUT_POST , 'password');

if(empty($username)){
    $name_error = "please enter your name";
}else if(strlen($username) < 6){
    $name_error = 'your name needs to have a minimum of 6 letters';
}
if(empty($password)){
    $pass_error = "please enter your password";
} else if (strlen($password) < 6) {
    $pass_error = 'your password needs to have a minimum of 6 letters';
}


if(empty($name_error) && empty($pass_error)){
    include('success.php');
}else
include('index.php');
?>
