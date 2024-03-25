<?php
include 'connection.php';

if(isset($_POST['signin'])){
     $fullname=$_POST['fname'];
     $email=$_POST['email'];
     $number=$_POST['number'];
     $username=$_POST['username'];
     $password=$_POST['password'];


     //validation
     if(!$fullname){
        header('location:../views/signup.php?error=Insert your full name');
        exit();
    }
   if(!$email){
       header('location:../views/signup,php?error=Insert your email');
       exit();
   }
   if(!$number){
       header('location:../views/signup.php?error=Insert your  phone number');
       exit();
   }
   if(!$password){
       header('location:../views/signup.php?error=Insert your  password');
       exit();
   }
   if(!$username){
       header('location:../views/signup.php?error=Insert your username');
       exit();
   }else{

   


     $query="SELECT * FROM users WHERE Email='$email'";
     $result= mysqli_query($conn,$query);
     
     if(mysqli_num_rows($result)>0){ 
         header('location:../views/signup.php?error=Your email "'.$email.'" has already registered!');
         exit();
     }else{
        $hashed_password = md5($password);
         
        $sql = "INSERT INTO users(full_name,User_name,Email,Password,Phone_number) 
        VALUES('$fullname','$username','$email','$hashed_password',$number)";
        $result = mysqli_query($conn,$sql);

        if($result){
            header('location:../views/login.php');
            exit();
        }else{
            header('location:../signup.php?error=Something went wrong!');
            exit();
        }


    }
}
}

