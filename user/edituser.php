<?php 
ob_start(); 
session_start();
?><!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Fitnezz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
   <?php require_once('./layout/header.php');?>
    <!-- END header -->
    
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Edit Your Profile</h1>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->
    
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="form-wrap overlap primary element-animate">
              <h2 class="h2">Edit Profile</h2>
              <form action="./php/edituser.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <input type="hidden" class="form-control" value="<?php echo $_SESSION['id']; ?>" name="id" placeholder="id" >

                  <input type="text" class="form-control" name="username" placeholder="Enter Your Name" value="<?php echo $_SESSION['name'];?>">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="usermail" placeholder="Enter Email"value="<?php echo $_SESSION['email'];?>">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" name="contact" placeholder="Enter Contact" value="<?php echo $_SESSION['contact'];?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="useraddrress" placeholder="Enter Adress" value="<?php echo $_SESSION['address'];?>">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="userpass" placeholder="Enter Password" value="<?php echo $_SESSION['pass'];?>">
                </div>
                <div class="form-group">
                  <input type="file" class="form-control" value="../admin/imges/<?php echo $_SESSION['image']; ?>" name="userprofile" placeholder="Enter profile" value="<?php echo $_SESSION['name'];?>">
                  <input type="hidden" class="form-control" value="../admin/imges/<?php echo $_SESSION['image']; ?>" name="userprofile" placeholder="Enter profile" value="<?php echo $_SESSION['name'];?>">

                </div>
 
                
                <div class="form-group">
                  <input type="submit" name="edituser" class="btn btn-warning btn-block py-3" value="Create an account">
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-wrap overlap element-animate" style="margin-top: -150px; height:630px;">
            <div class="media d-block media-custom text-center">
            <a href="#"><img src="../admin/imges/<?php echo $_SESSION['image']; ?>" alt="Image Placeholder" class="img-fluid" style="height:500px"></a>
          </div>

        </div>
      </div>
    </section>

    <?php require_once('./layout/footer.php')?>

    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>