<?php
include 'connection.php';

if(isset($_POST['edit'])){
     $fullname=$_POST['fname'];
     $email=$_POST['email'];
     $number=$_POST['number'];
     $username=$_POST['username'];
     $id=$_POST['no_id'];


     //validation
     if(!$fullname){
        header('location:../views/edituser.php?id=' .$id. '&error=Insert your full name');
        exit();
    }
   if(!$email){
       header('location:../views/edituser.php?id=' .$id. '&error=Insert your email');
       exit();
   }
   if(!$number){
       header('location:../views/edituser.php?id=' .$id. '&error=Insert your  phone number');
       exit();
   }
//    if(!$password){
//        header('location:../views/signup.php?error=Insert your  password');
//        exit();
//    }
   if(!$username){
       header('location:../views/edituser.php?id=' .$id. '&error=Insert your username');
       exit();
   }
   
   else {

   


     $query="UPDATE users SET full_name='$fullname', User_name='$username', Phone_number='$number', Email='$email' WHERE ID= $id";
     $result= mysqli_query($conn,$query);

     if($result){
        
            header('location:home.php');
     }else {
        echo "Failed to edit!";
     }
    }

}


     
    //  if(mysqli_num_rows($result)>0){ 
    //      header('location:../views/signup.php?error=Your email "'.$email.'" has already registered!');
    //      exit();
    //  }else{
        // $hashed_password = md5($password);
         
        // $sql = "INSERT INTO users(full_name,User_name,Email,Password,Phone_number) 
        // VALUES('$fullname','$username','$email','$hashed_password',$number)";
        // $result = mysqli_query($conn,$sql);

      
        else{
            header('location:../signup.php?error=Something went wrong!');
            exit();
        }



