<?php
require_once ("../../include/db.php");
$id=$_GET['id'];

$sql= "DELETE FROM `trainer` WHERE id='$id'";
if(mysqli_query($conn, $sql)){
     
      echo "<SCRIPT> //not showing me this
      alert('are you sure you want to delete')
      window.location.replace('../manageTrainer.php');
  </SCRIPT>";
      // echo 1;
      //header("location:../mangeUser.php");
     // echo "<script> alert('User Inserted Successfull') </script>";
  }
//   else{
//       echo 0;
//   }
?>