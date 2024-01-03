<?php 
require_once ("../../include/db.php");
if(isset($_POST['addTrainer'])){

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
$sql = "INSERT INTO `trainer`( `name`, `gmail`, `phone`, `experience`, `addresss`, `t_image`, `password`) VALUES (' $trainername',' $email','$mobile','$experience','$address','$imgname','$password')";
if(mysqli_query($conn, $sql)){

      header("location:../addtrainer.php");
      echo "<script> alert('User Inserted Successfull') </script>";
  }
  else{
      echo 0;
  }
}
?>