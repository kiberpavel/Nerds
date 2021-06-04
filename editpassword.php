<?php
 $password=filter_var(trim($_POST['password']),
 FILTER_SANITIZE_STRING);

 $mycookie= $_COOKIE["user"];

 $password=md5($password."skajhagkbgw");

 $mysql= new  mysqli('localhost','root','root','nerds');

 $mysql->query("UPDATE `registration` SET `password`='$password' WHERE `login`='$mycookie'" );

 $mysql->close(); 

 header('Location: /');
?>