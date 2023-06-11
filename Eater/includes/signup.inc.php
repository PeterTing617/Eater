<?php

if (isset($_POST["submit"])){

    $name = $_POST["signup_name"];
    $email = $_POST["signup_email"];
    $username = $_POST["signup_username"];
    $pwd = $_POST["signup_password"];
    $pwdRepeat = $_POST["signup_password_repeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false){
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

} else {
    header("location: ../signup.php");
    exit();
}