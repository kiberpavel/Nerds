<?php
    $login=filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $password=filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    $password=md5($password."skajhagkbgw");

    $mysql= new  mysqli('localhost','root','root','nerds');

    $result=$mysql->query("SELECT * FROM `registration` 
                           WHERE `login`='$login' AND `password`='$password'");
    $user=$result->fetch_assoc();

    setcookie('user',$login,time()+3600,"/");

    $mysql->close();


    header('Location: /');
?>