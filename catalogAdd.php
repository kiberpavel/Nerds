<?php

$mysql= new  mysqli('localhost','root','root','nerds');

// $num = 6;

// $posts = mysqli_fetch_array(mysqli_query($mysql, "SELECT COUNT(`id`) FROM `items`"))[0];

// $total = intval(($posts - 1) / $num) + 1; 
// $page = intval($page);

// if(empty($page) || $page < 0) $page = 1;
// if($page > $total) $page = $total;

// $start = $page * $num - $num;

// $result=mysqli_query($mysql,"SELECT * FROM `items` ORDER BY `id` DESC LIMIT $start, $num");

// $result=mysqli_query($mysql,"SELECT * FROM `items`");

// $post=mysqli_fetch_assoc($result);

// while($post=mysqli_fetch_assoc($result))
// {
//     $info[]=$post;
// }

$query = "SELECT * FROM `items`";
$result = mysqli_query($mysql, $query);
while ($post = mysqli_fetch_assoc($result))
    $info[] = $post;

$mysql->close();


?>