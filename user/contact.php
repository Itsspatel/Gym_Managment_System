<?php session_start(); ?>
<!doctype html>
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
    
   <?php require_once('./layout/header.php'); ?>
    <!-- END header -->
    
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Contact</h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->

    <section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Get In Touch</h2>
              <span class="back-text">Contact</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="hidden" id="id" name="id" value="<?php echo $_SESSION['id'];?>" class="form-control ">

                  <input type="text" id="name" name="name" value="<?php echo $_SESSION['name'];?>" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" value="<?php echo $_SESSION['contact'];?>" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" value="<?php echo $_SESSION['email'];?>" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" name="Message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" name="send_message" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>
          
          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Contact Details</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>34 Street Name, City Name Here, United States</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+1 242 4942 290</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>info@yourdomain.com</span>
                </p>
              </div>

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