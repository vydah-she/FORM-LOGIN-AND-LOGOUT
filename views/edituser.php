<?php
session_start();
include '../process/connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE ID=$id";
$selected=mysqli_query($conn,$sql);

$user=mysqli_fetch_assoc($selected);









?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit|User</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <form action="../process/edit.php" method="post">
    
    <div class="container w-50 mt-4">
      <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
      <h1><font style="color: grey"><i>Edit User</i></font></align></h1>
      <div class="alert">
        <?php
         if(isset ($_GET['error'])){
          echo "<p> . $_GET[error] . </p>";

         }

        ?>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Full name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="fname" value="<?=$user['full_name']?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="@" name="username" value="<?=$user['User_name']?>">
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@gmail.com" value="<?=$user['Email']?>">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

   <!-- <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div> -->

<div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Phone Number</label>
      <input type="text" name="number" value="<?=$user['Phone_number']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your dials">
    </div>

    <input type="hidden" name="no_id" value="<?=$user['ID']?>">
    <button type="submit" class="btn btn-primary" value="update" name="edit">Update</button>
    </div>
    </div>
  </form>
</body>
</html>