<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <form action="../process/login.php" method="post">
    
    <div class="container w-50 mt-4">
      <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
      <h1 class="h1"><font style="color: grey"><i>Already have an account?</i></font></align></h1>
      <div class="alert">
       <?php
        if(isset($_GET['error'])){
          echo "<p> .$_GET[error] . </p>";
        }
       ?>
       </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="@">
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Log In</button>
    </div>
    </div>
  </form>
</body>
</html>