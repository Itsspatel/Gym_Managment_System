<?php
require_once ("../../include/db.php");
session_start();
ob_start();
if(isset($_POST['loginuser'])){
    $email=$_POST["usermail"];
    $pass=$_POST["pass"];
    $SQL="select * from user where gmail='$email' && password ='$pass' && role = 'user'";
    
    //print_r($SQL);
    //die;
    $data=mysqli_query($conn,$SQL); 
      if($row= mysqli_fetch_array($data)){
        //session_start();
        $_SESSION['email']=$row['gmail'];
        $_SESSION['name']=$row['username'];
        $_SESSION['id']=$row['id'];
        $_SESSION['address']=$row['address'];
        $_SESSION['contact']=$row['contact'];
        $_SESSION['gmail']=$row['gmail'];
        $_SESSION['image']=$row['image'];
        $_SESSION['role']=$row['role'];
        $_SESSION['pass']=$row['password'];
        // $_SESSION['phone_number']=$row['phone_number'];
        
        // $_SESSION['address_user']=$row['address_user']; 
      if($_SESSION['role'] == 'user'){
       
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