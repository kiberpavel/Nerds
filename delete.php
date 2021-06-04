<?php
$mysql= new  mysqli('localhost','root','root','nerds');

$mycookie= $_COOKIE["user"]; 
$con= new  mysqli('localhost','root','root','nerds'); 
$sql=("SELECT `status`  FROM `registration` WHERE `login`='$mycookie'" ); 
$result = mysqli_query($con, $sql); 
$status = mysqli_fetch_assoc($result)['status'];

if($status == 10) {
    $id = $_GET['id'];
    $sql=("DELETE FROM `items` WHERE `id` = $id" ); 
    mysqli_query($con, $sql); 
}
header("Location: " . "catalog.php");
?>