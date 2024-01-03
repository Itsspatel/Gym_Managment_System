<?php
require_once ("../../include/db.php");
if(isset($_POST['edituser'])){
  $id = $_POST['id'];
  $username = $_POST['editName'] ;
  $email = $_POST['editEmail'];
  $mobile =$_POST['editMobile'];
  $password =$_POST['editpassword'];
  $address = $_POST['editaddress'];
  $oldimage = $_POST['profileimageold'];
 // Image Upload
    $imgname = $_FILES['editprofileimage']['name'];
    $profileName = $_FILES['editprofileimage']['tmp_name'];
    $pdfType = $_FILES['editprofileimage']['type'];
    $pdfSize = $_FILES['editprofileimage']['size'];
    // Move the uploaded PDF to a destination folder (you can change this path)
    $uploadPath = "../imges/";
    $uploadedPdfPath = $uploadPath . $imgname;
    $uploadedPdfPathold = $uploadPath . $oldimage;
   (move_uploaded_file($profileName, $uploadedPdfPath)) ;
   //unlink($uploadedPdfPathold);
   $sql = "UPDATE `user` SET `username`='$username',`gmail`='$email',`contact`='$mobile',`address`='$address',`password`='$password',`image`='$imgname' WHERE `id` = $id ";
   //$result= mysqli_query($conn,$sql);
   if(mysqli_query($conn, $sql)){

      header("location:../mangeUser.php");
      //echo "<script> alert('User Inserted Successfull') </script>";
  }
  else{
      echo 0;
  }

}
?>