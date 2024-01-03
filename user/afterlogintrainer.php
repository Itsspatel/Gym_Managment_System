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
    
    <!-- <php require_once('./layout/header.php'); ?>
    END header -->
    
    <!-- <php require_once('./layout/slider.php'); ?>
    END slider -->

<section class="section element-animate">
<div class="clearfix mb-5 pb-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center heading-wrap">
        <h2>Your Profile</h2>
        <span class="back-text">Our Trainers</span>
      </div>
    </div>
  </div>
</div>
  <div class="container" style="margin-left:530px">
    <div class="row">
      <div class="major-caousel js-carousel-1 owl-carousel">
        
          <div class="media d-block media-custom text-center">
            <a href="#"><img src="../admin/imges/<?php echo $_SESSION['image']; ?>" alt="Image Placeholder" class="img-fluid"></a>
            <div class="media-body">
              <h3 class="mt-0 text-black"><?php echo $_SESSION['name']; ?></h3>
              <p class="lead">Gym Trainer</p>
            </div>
        <div style="border: 1px solid black; padding: 10px; border-radius:25px; background: #E5E7E9;">
        <lable style="color: black;">Email</lable>
            <p class="text-body"><?php echo $_SESSION['email']; ?></p>
            <lable style="color: black;">Address</lable>
              <p class="text-body"><?php echo $_SESSION['address']; ?></p>
            <lable style="color: black;">Experience</lable>

              <p class="text-body"><?php echo $_SESSION['experience']; ?></p>
              <p class="text-body"><b style="color:black; margin-left:-25px">Contact &nbsp;:&nbsp;&nbsp;</b><?php echo $_SESSION['contact']; ?></p>
          
                <a class="nav-link" href="./edittrainer.php"><input type="submit" class="btn btn-info btn-sm" value="Edit Profile"></a>
        </div>
          </div>
      
 
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

         <!-- <div> -->
        <!-- <div class="media d-block media-custom text-center">
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
 <section class="section bg-light element-animate" >

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

        <?php 
       require_once('../include/db.php');
       $id=$_SESSION['id'];
       $sql = "SELECT * from booking left join user on booking.user_id= user.id left join package on booking.package_id = package.package_id left join trainer on booking.alot_trainer = trainer.id where booking.alot_trainer= $id";
       $result= mysqli_query($conn,$sql);
       while($row = $result->fetch_assoc())
       {
              $id = $row['package_id'];
               $package_name = $row['package_name'];
               $price = $row['price'];
               $package_details = $row['pacakge_details'];
              $image = $row['p_image'];
               $name = $row['username'];
               $add = $row['address'];
               $contact=$row['contact'];
               $userimage = $row['image'];
              $image = $row['t_image'];
              $alot_time = $row['alot_time'];
              $mobile = $row['contact'];
              $trainer_name = $row['name'];
     ?> 
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('../admin/imges/<?php echo $userimage; ?>');"></div>
              <div class="text order-1">
                <h3><?php echo $name; ?></h3>
                <p><?php echo $add; ?></p>
                <p><?php echo $contact; ?></p>
                <p><?php echo $package_details; ?></p>

                <p class="sched-time">
                  <span><span class="fa fa-clock-o">&nbsp;&nbsp;</span><?php echo $alot_time; ?></span> <br>
                  <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                </p>
                <!-- <p><a href="#" class="btn btn-primary btn-sm">Join from $15</a></p> -->
                
              </div>
              
            </div>
            </div>
<?php } ?>
            <!-- <div class="sched d-block d-lg-flex">
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
              
            </div> -->

          <!-- </div> -->

          <!-- <div class="col-md-6">
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

          </div> -->
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

      <div class="container" style="margin-top:100px">
        <div class="row">
          
          <div>
            <blockquote class="testimonial">
              <p>&ldquo;<?php echo $_SESSION['About']; ?></p>
              <div class="d-flex author">
                <img src="../admin/imges/<?php echo $image; ?>" alt="" class="mr-4">
                <div class="author-info">
                  <h4><?php echo $_SESSION['name']; ?></h4>
                  <p style="color: black;"><?php echo $_SESSION['experience'];?></p>
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
<script>
      $(document).on("click","#pay",function(){
            alert("ok");
      });
</script>