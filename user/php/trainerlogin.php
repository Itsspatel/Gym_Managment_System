<?php
require_once ("../../include/db.php");
session_start();
ob_start();
if(isset($_POST['logintrainer'])){
    $email=$_POST["trainermail"];
    $pass=$_POST["pass"];
    $SQL="select * from trainer where gmail='$email' && password ='$pass' && role = 'trainer'";
    
    //print_r($SQL);
    //die;
    $data=mysqli_query($conn,$SQL); 
      if($row= mysqli_fetch_array($data)){
        //session_start();
        $_SESSION['email']=$row['gmail'];
        $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];
        $_SESSION['address']=$row['addresss'];
        $_SESSION['contact']=$row['phone'];
        $_SESSION['experience']=$row['experience'];
        $_SESSION['image']=$row['t_image'];
        $_SESSION['role']=$row['role'];
        $_SESSION['pass']=$row['password'];
        $_SESSION['About']=$row['About'];


        // $_SESSION['phone_number']=$row['phone_number'];
        
        // $_SESSION['address_user']=$row['address_user']; 
      if($_SESSION['role'] == 'trainer'){
       
        header("location:../afterloginuser.php");
         
        
    }
    elseif($_SESSION['user_type'] == 'Admin'){
      header("location:../afterlogitrainer.php");
       
        // header("location:../../Admin/Pages/AdminPages/dashboard.php"); 
       // require_once("");
        
    }
    else{
        echo"<div class='text-danger font-weight-bold'>Please Enter vaild User Details ggg</div>";
    }
}
    else{ 
        
     // echo "Error:".$SQL."<br>".$conect->error;
      echo"<div class='text-danger font-weight-bold'>Invaild Username and Password hh</div>";
         
   }   
  }
?>