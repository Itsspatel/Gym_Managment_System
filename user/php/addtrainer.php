<?php 
require_once ("../../include/db.php");
if(isset($_POST['addtrainer'])){

  $trainername = $_POST['trainername'];
  $email = $_POST['traineremail'];
  $mobile =$_POST['contact'];
  $password =$_POST['pass'];
  $experience =$_POST['experience'];
  $about =$_POST['about'];
  $address = $_POST['traineraddress'];
 // Image Upload
    $imgname = $_FILES['trainerprofile']['name'];
    $profileName = $_FILES['trainerprofile']['tmp_name'];
    $pdfType = $_FILES['trainerprofile']['type'];
    $pdfSize = $_FILES['trainerprofile']['size'];
    // Move the uploaded PDF to a destination folder (you can change this path)
    $uploadPath = "../../admin/imges/";
    $uploadedPdfPath = $uploadPath . $imgname;
   (move_uploaded_file($profileName, $uploadedPdfPath)) ;   
$sql = "INSERT INTO `trainer`(`name`,`gmail`,`phone`,`experience`,`About`,`addresss`,`t_image`,`password`) VALUES ('$trainername','$email','$mobile','$experience','$about','$address','$imgname','$password')";
if(mysqli_query($conn, $sql)){

      header("location:../index.php");
      echo "<script> alert('User Inserted Successfull') </script>";
  }
  else{
      echo 0;
  }
}
?>