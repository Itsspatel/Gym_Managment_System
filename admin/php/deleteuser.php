<?php
require_once ("../../include/db.php");
$user_id = $_POST['sid'];
//echo $user_id ;
 $sql = "DELETE FROM `user` WHERE `id` = $user_id";
 if(mysqli_query($conn, $sql)){
  echo "<SCRIPT> //not showing me this
  alert('are you sure you want to delete')
  window.location.replace('../mangeUser.php');
</SCRIPT>";  }
  else{
      echo 0;
  }

?>