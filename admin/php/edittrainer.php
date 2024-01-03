<?php 
require_once ("../../include/db.php");
if(isset($_POST['edittrainer'])){
  $id =$_POST["id"];
  $trainername = $_POST['TrainerName'] ;
  $email = $_POST['Traineremail'];
  $mobile =$_POST['TrainerMobile'];
  $password =$_POST['pass'];
  $experience =$_POST['experience'];
  $address = $_POST['address'];
 // Image Upload
    $imgname = $_FILES['trinerprofile']['name'];
    $profileName = $_FILES['trinerprofile']['tmp_name'];
    $pdfType = $_FILES['trinerprofile']['type'];
    $pdfSize = $_FILES['trinerprofile']['size'];
    // Move the uploaded PDF to a destination folder (you can change this path)
    $uploadPath = "../imges/";
    $uploadedPdfPath = $uploadPath . $imgname;
   (move_uploaded_file($profileName, $uploadedPdfPath)) ;  
   $sql="UPDATE `trainer` SET `name`=' $trainername',`gmail`='$email',`phone`='$mobile',`experience`='$experience',`addresss`='$address',`t_image`='$imgname',`password`='$password' WHERE id=$id";


   if(mysqli_query($conn, $sql)){

      header("location:../manageTrainer.php");
      //echo "<script> alert('User Inserted Successfull') </script>";
  }
  else{
      echo 0;
  }}

   ?>