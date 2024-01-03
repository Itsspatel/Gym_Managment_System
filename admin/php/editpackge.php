<?php 
require_once ("../../include/db.php");
if(isset($_POST['editpackage'])){
  $id = $_POST['id'];
  $name = $_POST['packageName'] ;
  $price = $_POST['price'];
  $details =$_POST['packagedetails'];
  
  
  $imgname = $_FILES['editpacakgeimage']['name'];
  $profileName = $_FILES['editpacakgeimage']['tmp_name'];
  $pdfType = $_FILES['editpacakgeimage']['type'];
  $pdfSize = $_FILES['editpacakgeimage']['size'];
  // Move the uploaded PDF to a destination folder (you can change this path)
  $uploadPath = "../imges/";
  $uploadedPdfPath = $uploadPath . $imgname;
 (move_uploaded_file($profileName, $uploadedPdfPath)) ; 
 $sql="UPDATE `package` SET `package_name`='$name',`price`='$price',`pacakge_details`='$details',`p_image`='$imgname' WHERE package_id= $id";
 
 if(mysqli_query($conn, $sql)){

      header("location:../managePackage.php");
      //echo "<script> alert('User Inserted Successfull') </script>";
  }
  else{
      echo 0;
  }
}
   ?>