<?php 
require_once ("../../include/db.php");
if(isset($_POST['addpackage'])){

  $name = $_POST['Name'] ;
  $price = $_POST['packageprice'];
  $details =$_POST['packagedetails'];
  
  
  $imgname = $_FILES['packageimage']['name'];
  $profileName = $_FILES['packageimage']['tmp_name'];
  $pdfType = $_FILES['packageimage']['type'];
  $pdfSize = $_FILES['packageimage']['size'];
  // Move the uploaded PDF to a destination folder (you can change this path)
  $uploadPath = "../imges/";
  $uploadedPdfPath = $uploadPath . $imgname;
 (move_uploaded_file($profileName, $uploadedPdfPath)) ; 


$sql = "INSERT INTO `package`(`package_name`, `price`, `pacakge_details`, `p_image`) VALUES ('$name','$price','$details','$imgname')";
if(mysqli_query($conn, $sql)){

      header("location:../addPackage.php");
      echo "<script> alert('User Inserted Successfull') </script>";
  }
  else{
      echo 0;
  }
}
?>