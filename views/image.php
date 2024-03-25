<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
  <form method="post" action="../process/img.php" enctype="multipart/form-data">
    <div class="container w-50 pt-5">
    <div class="form-group">
        <input class="form-control"  type="file" name="image">
    </div>
    <br>
    <div class="form-group">
     <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
    </div>
    </div>
   </form>
</body>
</html>