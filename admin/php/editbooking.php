<?php 
require_once ("../../include/db.php");
if(isset($_POST['editbooking'])){
  $id =$_POST["id"];
  $alot_trainer =$_POST['trainer_name'];
  $Timing =$_POST['alot_time'];
 
   $sql="UPDATE `booking` SET `alot_trainer`=' $alot_trainer',`alot_time`='$Timing',`boking_status`='CONFIRM' WHERE b_id=$id";


   if(mysqli_query($conn, $sql)){

      header("location:../manageBooking.php");
      //echo "<script> alert('User Inserted Successfull') </script>";
  }
  else{
      echo 0;
  }}

   ?>