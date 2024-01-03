<?php 
require_once ("../../include/db.php");
if(isset($_POST['adduser'])){

  $username = $_POST['Name'] ;
  $email = $_POST['email'];
  $mobile =$_POST['Mobile'];
  $password =$_POST['password'];
  $address = $_POST['address'];
 // Image Upload
    $imgname = $_FILES['profileimage']['name'];
    $profileName = $_FILES['profileimage']['tmp_name'];
    $pdfType = $_FILES['profileimage']['type'];
    $pdfSize = $_FILES['profileimage']['size'];
    // Move the uploaded PDF to a destination folder (you can change this path)
    $uploadPath = "../imges/";
    $uploadedPdfPath = $uploadPath . $imgname;
   (move_uploaded_file($profileName, $uploadedPdfPath)) ;   
$sql = "INSERT INTO `user`(`username`, `gmail`, `contact`, `address`,`password`,`image`) VALUES (' $username',' $email','$mobile','$address','$password','$imgname')";
if(mysqli_query($conn, $sql)){

      header("location:../addUser.php");
      echo "<script> alert('User Inserted Successfull') </script>";
  }
  else{
      echo 0;
  }
}
?>