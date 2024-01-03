<?php
require_once ("../../include/db.php");
$id=$_GET['id'];

$sql= "DELETE FROM `booking` WHERE b_id='$id'";
if(mysqli_query($conn, $sql)){
  echo "<SCRIPT> //not showing me this
  alert('are you sure you want to delete')
  window.location.replace('../manageBooking.php');
</SCRIPT>";
  }
  else{
      echo 0;
  }
?>