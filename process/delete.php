<?php

include 'connection.php';

$user_id = $_GET['id'];
 
$sql = "DELETE FROM users WHERE ID=$user_id";
$isDeleted = mysqli_query($conn,$sql);

if($isDeleted){
    header('location:home.php?msg=User has successful deleted!');
}else{
    header('location:home.php?msg=Failed to delete!');
}