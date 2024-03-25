<?php
session_start();
include "connection.php";

if(isset($_POST['login'])){
     $username=$_POST['username'];
     $password=$_POST['password'];

if(!$username){
    header('location:../views/login.php?error=Insert your username');
    exit();
}elseif(!$password){
    header('location:../views/login.php?error=Insert your password');
    exit();
}else{
  
    $query="SELECT * FROM users WHERE User_name='$username'";
    $result = mysqli_query($conn,$query);

    
    
    if(mysqli_num_rows($result) >0){
     $user=mysqli_fetch_assoc($result);

     $hashed_pwd = md5($password);
     
     
     //check if correct password
     if($hashed_pwd != $user['Password']){
        header('location:../views/login.php?error=Insert correct password');
        exit();
     }else{
         $_SESSION['user_id']=$user['id'];
         $_SESSION['full_name']=$user['full_name'];
         $_SESSION['User_name']=$user['User_name'];
         $_SESSION['email']=$user['email'];
         $_SESSION['Password']=$user['Password'];
         $_SESSION['Phone_number']=$user['Phone_number'];

         header("location:home.php?id=". $_SESSION['user_id']);

     }

   }
}
 //Validation
}



