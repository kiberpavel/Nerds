<?php

    $first_name=filter_var(trim($_POST['first_name']),
    FILTER_SANITIZE_STRING);
    $second_name=filter_var(trim($_POST['second_name']),
    FILTER_SANITIZE_STRING);
    $login=filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $password=filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);


    $password=md5($password."skajhagkbgw");

    $mysql= new  mysqli('localhost','root','root','nerds');
    $mysql->query("INSERT INTO  `registration` (`first_name`,`second_name`,`login`,`password`)
    VALUES('$first_name','$second_name','$login','$password')");

    $mysql->close();

    setcookie('user',$login,time()+3600,"/");

    header('Location: /');
?>