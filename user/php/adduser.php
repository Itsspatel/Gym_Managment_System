<?php 
require_once ("../../include/db.php");
if(isset($_POST['adduser'])){

  $username = $_POST['username'] ;
  $email = $_POST['usermail'];
  $mobile =$_POST['contact'];
  $password =$_POST['userpass'];
  $address = $_POST['useraddrress'];
 // Image Upload
    $imgname = $_FILES['userprofile']['name'];
    $profileName = $_FILES['userprofile']['tmp_name'];
    $pdfType = $_FILES['userprofile']['type'];
    $pdfSize = $_FILES['userprofile']['size'];
    // Move the uploaded PDF to a destination folder (you can change this path)
    $uploadPath = "../../admin/imges/";
    $uploadedPdfPath = $uploadPath . $imgname;
   (move_uploaded_file($profileName, $uploadedPdfPath)) ;   
$sql = "INSERT INTO `user`(`username`, `gmail`, `contact`, `address`,`password`,`image`) VALUES ('$username','$email','$mobile','$address','$password','$imgname')";
if(mysqli_query($conn, $sql)){

      header("location:../index.php");
      echo "<script> alert('User Inserted Successfull') </script>";
  }
  else{
      echo 0;
  }
}
?>