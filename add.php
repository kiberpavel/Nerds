<?php
$name=filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$description=filter_var(trim($_POST['description']),
FILTER_SANITIZE_STRING);
$price=filter_var(trim($_POST['price']),
FILTER_SANITIZE_STRING);
$photo='img/' . $_FILES['photo']['name'];
$mycookie= $_COOKIE["user"];

$mysql= new  mysqli('localhost','root','root','nerds');


$sql=("SELECT `id` FROM `registration` WHERE `login`='$mycookie'");
$result=mysqli_query($mysql, $sql);
$idUser=mysqli_fetch_assoc($result)['id'];


$mysql->query("INSERT INTO `items`(`name`,`description`,`price`,`url`, `user_id`)
VALUES('$name','$description','$price','$photo','$idUser')");

move_uploaded_file($_FILES['photo']['tmp_name'], 'img/' . $_FILES['photo']['name']);

$mysql->close();

header('Location: /');

?>