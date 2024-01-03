<?php
require_once ("../../include/db.php");
if(isset($_POST['edituser'])){
      $id=$_POST["id"];
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
   //unlink($uploadedPdfPathold);
   $sql = "UPDATE `user` SET `username`='$username',`gmail`='$email',`contact`='$mobile',`address`='$address',`password`='$password',`image`='$imgname' WHERE `id` = $id ";
   //$result= mysqli_query($conn,$sql);
   $result= mysqli_query($conn,$sql);
    if($result){
        if($_FILES['trainerprofile']['name']!=''){
          move_uploaded_file($_FILES['trainerprofile']['tmp_name'],"../../admin/imges/".$_FILES['trainerprofile']['name']);
          unlink("../../admin/imges/".$old_image);
        }
           session_start();
    session_unset();
    session_destroy();
    header("location:../index.php");
    
    }

}
?>