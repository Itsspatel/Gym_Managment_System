<?php  
session_start();
?>
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
    
    <?php require_once('./layout/slider.php'); ?>
    <!-- END slider -->

    
    
     
    <section class="section bg-light element-animate">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Our Schedule</h2>
              <span class="back-text-dark">Schedule</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/img_1_square.jpg');"></div>
              <div class="text order-1">
                <h3>Fitness Class Name Here</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="sched-time">
                  <span><span class="fa fa-clock-o"></span> 5:30 PM</span> <br>
                  <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                </p>
                <p><a href="#" class="btn btn-primary btn-sm">Join from $15</a></p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/img_2_square.jpg');"></div>
              <div class="text">
                <h3>Fitness Class Name Here</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="sched-time">
                  <span><span class="fa fa-clock-o"></span> 5:30 PM</span> <br>
                  <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                </p>
                <p><a href="#" class="btn btn-primary btn-sm">Join from $15</a></p>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/img_4_square.jpg');"></div>
              <div class="text order-1">
                <h3>Fitness Class Name Here</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="sched-time">
                  <span><span class="fa fa-clock-o"></span> 5:30 PM</span> <br>
                  <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                </p>
                <p><a href="#" class="btn btn-primary btn-sm">Join from $15</a></p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/img_3_square.jpg');"></div>
              <div class="text">
                <h3>Fitness Class Name Here</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="sched-time">
                  <span><span class="fa fa-clock-o"></span> 5:30 PM</span> <br>
                  <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                </p>
                <p><a href="#" class="btn btn-primary btn-sm">Join from $15</a></p>
                
              </div>
              
            </div>

          </div>
        </div>
        

      </div>
    </section> <!-- .section -->

    <?php 
require_once("../include/db.php");

$sql = "SELECT * FROM `trainer`";
$result= mysqli_query($conn,$sql);

?>


    <section class="section element-animate">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Expert Trainers</h2>
              <span class="back-text">Our Trainers</span>
            </div>
          </div>
        </div>
      </div>
        <div class="container">
          <div class="row">
            <div class="major-caousel js-carousel-1 owl-carousel">
            <?php 
       
       while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $trainername = $row["name"];
        $mobile = $row["phone"];
        $email = $row["gmail"];
        $password = $row["password"];
        $experience=$row["experience"];
        $image = $row["t_image"];
        $address = $row["addresss"];
        $status = $row["status"];
        
      
    
     ?>       
            
            <div>
                <div class="media d-block media-custom text-center">
                  <a href="#"><img src="../admin/imges/<?php echo $image; ?>" alt="Image Placeholder" class="img-fluid" style="width: 400px; height: 450px;"></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black"><?php echo $trainername; ?></h3>
                    <p class="lead">Gym Trainer</p>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- <div>
                <div class="media d-block media-custom text-center">
                  <a href="#"><img src="img/person_2.jpg" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Mike Richardson</h3>
                    <p class="lead">Gym Trainer</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="media d-block media-custom text-center">
                  <a href="#"><img src="img/person_3.jpg" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Charles White</h3>
                    <p class="lead">Gym Trainer</p>
                  </div>
                </div>
              </div>

               <div>
              <div class="media d-block media-custom text-center">
                <a href="#"><img src="img/person_1.jpg" alt="Image Placeholder" class="img-fluid"></a>
                <div class="media-body">
                  <h3 class="mt-0 text-black">Mellisa Howard</h3>
                  <p class="lead">Gym Trainer</p>
                </div>
              </div>
            </div> -->
            <!-- <div>
              <div class="media d-block media-custom text-center">
                <a href="#"><img src="img/person_2.jpg" alt="Image Placeholder" class="img-fluid"></a>
                <div class="media-body">
                  <h3 class="mt-0 text-black">Mike Richardson</h3>
                  <p class="lead">Gym Trainer</p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <a href="#"><img src="img/person_3.jpg" alt="Image Placeholder" class="img-fluid"></a>
                <div class="media-body">
                  <h3 class="mt-0 text-black">Charles White</h3>
                  <p class="lead">Gym Trainer</p>
                </div>
              </div>
            </div> -->
            
              
          </div>
          <!-- END slider -->
          </div>
        </div>
      
    </section> <!-- .section -->
    <section class="section element-animate">

<div class="clearfix mb-5 pb-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center heading-wrap">
        <h2>Testimonial</h2>
        <span class="back-text">Testimonial</span>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    
      <?php 
     
 
      $sql = "SELECT * FROM `trainer`";
      $result= mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $trainername = $row["name"];
        $mobile = $row["phone"];
        $email = $row["gmail"];
        $password = $row["password"];
        $experience=$row["experience"];
        $image = $row["t_image"];
        $address = $row["addresss"];
        $status = $row["status"];
        $about = $row["About"];
      
    
     ?>       
     <div class="col-md-4">
      <blockquote class="testimonial">
        <p>&ldquo;<?php echo $about; ?></p>
        <div class="d-flex author">
          <img src="../admin/imges/<?php echo $image; ?>" alt="" class="mr-4">
          <div class="author-info">
            <h4><?php echo $trainername; ?></h4>
            <p style="color: black;"><?php echo $experience;?></p>
          </div>
        </div>  
      </blockquote>
      </div>
      <?php } ?>
    <!-- </div>
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
    </div> -->
 
</div>
</section> <!-- .section -->

   <?php require_once('./layout/subscription.php'); ?>

    
    


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
<script>
      $(document).on("click","#pay",function(){
            alert("ok");
      });
</script>