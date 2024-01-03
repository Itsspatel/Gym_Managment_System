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
    
  <?php require_once('./layout/header.php');?>

    <!-- END header -->
    
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Services</h1>
              
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
              <h2>Featured Services</h2>
              <span class="back-text">Our Services</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
        <?php 
       require_once('./../include/db.php'); 
       $sql = "SELECT * FROM `package`";
       $result= mysqli_query($conn, $sql); 
       while($row = $result->fetch_assoc())
       {
              $id = $row['package_id'];
               $package_name = $row['package_name'];
               $price = $row['price'];
               $package_details = $row['pacakge_details'];
              $image = $row['p_image'];

     ?>
          <div class="col-md-6 mb-4">
            <div class="blog d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('../admin/imges/<?php echo $image;?>'); height:250px;"></div>
              <div class="text">
                <h3><?php echo $package_name;?></h3>
                <p><?php echo $package_details;?></p>
                
                <!-- <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p> -->
                
              </div>
              
            </div>
          </div>
          <?php }?>
          <!-- <div class="col-md-6 mb-4">
            <div class="blog d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/img_1_square.jpg');"></div>
              <div class="text">
                <h3>Services Name Here</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                
                <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                
              </div>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="blog d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/img_2_square.jpg');"></div>
              <div class="text">
                <h3>Services Name Here</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                
                <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                
              </div>
              
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="blog d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/img_1_square.jpg');"></div>
              <div class="text">
                <h3>Services Name Here</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                
                <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                
              </div>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="blog d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/img_2_square.jpg');"></div>
              <div class="text">
                <h3>Services Name Here</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                
                <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                
              </div>
              
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="blog d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/img_1_square.jpg');"></div>
              <div class="text">
                <h3>Services Name Here</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                
                <p><a href="#" class="btn btn-primary btn-sm">Learn More</a></p>
                
              </div>
              
            </div>
          </div>
        </div>
      </div> -->

    </section> <!-- .section -->

    <section class="section element-animate">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Happy Customer</h2>
              <span class="back-text">Testimonial</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <blockquote class="testimonial">
              <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, obcaecati? Quis eum minus, sequi atque quisquam ducimus aliquam veritatis nobis cum iusto neque enim explicabo maxime natus doloribus, fuga sunt. &rdquo;</p>
              <div class="d-flex author">
                <img src="img/person_1.jpg" alt="" class="mr-4">
                <div class="author-info">
                  <h4>Mellisa Howard</h4>
                  <p>CEO, XYZ Company</p>
                </div>
              </div>  
            </blockquote>
          </div>
          <div class="col-md-4">
            <blockquote class="testimonial">
              <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, obcaecati? Quis eum minus, sequi atque quisquam ducimus aliquam veritatis nobis cum iusto neque enim explicabo maxime natus doloribus, fuga sunt. &rdquo;</p>
              <div class="d-flex author">
                <img src="img/person_2.jpg" alt="" class="mr-4">
                <div class="author-info">
                  <h4>Mike Richardson</h4>
                  <p>CEO, XYZ Company</p>
                </div>
              </div>  
            </blockquote>
          </div>
          <div class="col-md-4">
            <blockquote class="testimonial">
              <p>&ldquo; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, obcaecati? Quis eum minus, sequi atque quisquam ducimus aliquam veritatis nobis cum iusto neque enim explicabo maxime natus doloribus, fuga sunt. &rdquo;</p>
              <div class="d-flex author">
                <img src="img/person_3.jpg" alt="" class="mr-4">
                <div class="author-info">
                  <h4>Charles White</h4>
                  <p>CEO, XYZ Company</p>
                </div>
              </div>  
            </blockquote>
          </div>
        </div>
      </div>
    </section> <!-- .section -->

    


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