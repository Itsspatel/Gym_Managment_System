<?php 
session_start();
require_once ("../../include/db.php");
if(isset($_POST['edittrainer'])){
    $id= $_POST['id'];
   $trainername = $_POST['trainername'];
   $email = $_POST['traineremail'];
   $mobile =$_POST['contact'];
   $password =$_POST['pass'];
   $experience =$_POST['experience'];
   $about =$_POST['about'];
   $address = $_POST['traineraddress'];
  // Image Upload
     $imgname = $_FILES['trainerprofile']['name'];
     $profileName = $_FILES['trainerprofile']['tmp_name'];
     $pdfType = $_FILES['trainerprofile']['type'];
     $pdfSize = $_FILES['trainerprofile']['size'];
     // Move the uploaded PDF to a destination folder (you can change this path)
     $uploadPath = "../../admin/imges/";
     $uploadedPdfPath = $uploadPath . $imgname;
    (move_uploaded_file($profileName, $uploadedPdfPath)) ;  

   $sql="UPDATE `trainer` SET `name`=' $trainername',`gmail`='$email',`phone`='$mobile',`experience`='$experience',`About`='$about', `addresss`='$address',`t_image`='$imgname',`password`='$password' WHERE id=$id";


   if($conn->query($sql)===TRUE){
      
      session_start();
      session_unset();
      session_destroy();
      header("location:../index.php");
}
  else{
      echo "Error editing user details" . $conn->error;
  }
}
$conn->close();












// session_start();
// require_once ("../../include/db.php");
// if(isset($_POST['edittrainer'])){
//     $id= $_POST['id'];
//    $trainername = $_POST['trainername'];
//    $email = $_POST['traineremail'];
//    $mobile =$_POST['contact'];
//    $password =$_POST['pass'];
//    $experience =$_POST['experience'];
//    $address = $_POST['traineraddress'];
//    $old_image= $_POST['oldtrainerprofile'];
//    $new_image= $_FILES['trainerprofile']['name'];

// if($new_image !='')
// {
// $update_filename = $_FILES['trainerprofile']['name'];
// }
// else{
//   $update_filename = $old_image;
// }
//   // Image Upload
//   if(file_exists('../../admin/imges/'.$_FILES['trainerprofile']['name'])){
//      $imgname = $_FILES['trainerprofile']['name'];
//     $_SESSION['image'] = "image already exists".$imgname;
//     header('location: ../edittrainer.php');
//   }
//   else{
//     $sql="UPDATE `trainer` SET `name`=' $trainername',`gmail`='$email',`phone`='$mobile',`experience`='$experience',`addresss`='$address',`t_image`='$imgname',`password`='$password' WHERE id=$id";
//     $result= mysqli_query($conn,$sql);
//     if($result){
//         if($_FILES['trainerprofile']['name']!=''){
//           move_uploaded_file($_FILES['trainerprofile']['tmp_name'],"../../admin/imges/".$_FILES['trainerprofile']['name']);
//           //unlink("../../admin/imges/".$old_image);
//         }
//            session_start();
//     session_unset();
//     session_destroy();
//     header("location:../index.php");
    
//     }
  //  if($conn->query($sql)===TRUE){
      
  //   session_start();
  //   session_unset();
  //   session_destroy();
  //   header("location:../index.php");
  // }
    //  $profileName = $_FILES['trainerprofile']['tmp_name'];
    //  $pdfType = $_FILES['trainerprofile']['type'];
    //  $pdfSize = $_FILES['trainerprofile']['size'];
    //  // Move the uploaded PDF to a destination folder (you can change this path)
    //  $uploadPath = "../../admin/imges/";
    //  $uploadedPdfPath = $uploadPath . $imgname;
    // (move_uploaded_file($profileName, $uploadedPdfPath)) ;  

   



//   else{
//       echo "Error editing user details" . $conn->error;
//   }
// }
// }
// $conn->close();
   






   ?>