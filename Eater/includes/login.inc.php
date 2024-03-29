<?php

if (isset($_POST["submit"])){

    $username = $_POST["login_name"];
    $pwd = $_POST["login_password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
} else {
    header("location: ../login.php");
    exit();
}