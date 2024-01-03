<?php 
require_once ("../../include/db.php");

session_start();
session_unset();
session_destroy();
header("location:../user_login.php");
?>