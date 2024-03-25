<?php
include "connection.php";
if(isset($_FILES['image'])){
    //echo '<pre>';
    //print_r($_FILES['image']);

    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $img_tmp=$_FILES['image']['tmp_name'];
    $img_type=$_FILES['image']['type'];

    $extensions= array('jpeg','jpg','png');

    $img_extension = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));

    if(in_array($img_extension, $extensions) ) {
        
        if($img_size > 2097152){
            echo "Image is too large";
        }else{
            $new_img_name = "ME-mivida" . "." . $img_extension;
            $new_img_path = "../images/" . $new_img_name;
            $img_path = move_uploaded_file($img_tmp, $new_img_path);
            $date =date('Y-m-d H:i:sa');
 $sql= "INSERT INTO image_upload(Img_Name, Uploaded_at) VALUES('$new_img_name', '$date')";
 $result= mysqli_query($conn, $sql);

        }
    }else {
        echo "Extension not allowed";
    }

}
