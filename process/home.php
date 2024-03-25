<?php
session_start();
include'connection.php';

$sql='SELECT * FROM users';
$users=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container pt-4">
        <p class="welcome"><i>WELCOME <?=$_SESSION['User_name']?> YOU HAVE SUCCESSFULLY LOGGED IN</i></p>
        <a href="logout.php">
        <button type="button" class="btn btn-info">Log Out</button>
        </a>
<table class="table table-danger table-striped mt-4">
<thead>
  <tr>
    <th scope="col">S/N</th>
    <th scope="col">Full Name</th>
    <th scope="col">User Name</th>
    <th scope="col">Email</th>
    <th scope="col">Phone Number</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
    <?php
$i=1;
foreach($users as $user){
    ?>

  <tr>
    <th scope="row"><?=$i++;?></th>
    <td><?=$user['full_name']?></td>
    <td><?=$user['User_name']?></td>
    <td><?=$user['Email']?></td>
    <td>0<?=$user['Phone_number']?></td>
    <td>
        <a href="../views/edituser.php?id=<?=$user['ID']?>">
    <button type="button" class="btn btn-primary">Edit</button>
       </a>
    <a href="delete.php?id=<?=$user['ID']?>">
        <button type="button" class="btn btn-danger">Delete</button>
    </a>
    </td>
  </tr>

  

  <?php
}
?>

  
</tbody>
</table>
</div>
</body>
</html>

