<?php session_start(); ?>
<?php
require_once('../include/db.php');
$id=$_SESSION['id'];
$sql = "SELECT * from booking left join user on booking.user_id= user.id left join package on booking.package_id = package.package_id left join trainer on booking.alot_trainer = trainer.id where booking.user_id = $id";
$result= mysqli_query($conn,$sql);
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
    <style>
@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}


body {
	
	font-family: 'Muli', sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	min-height: 100vh;
	margin: 0;
}



.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 700px;
}

.course h6 {
	opacity: 1;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: #2A265F;
	color: #fff;
	padding: 30px;
	max-width: 250px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}

.progress-container {
	position: absolute;
	top: 30px;
	right: 30px;
	text-align: right;
	width: 150px;
}

.progress {
	background-color: #ddd;
	border-radius: 3px;
	height: 5px;
	width: 100%;
}

.progress::after {
	border-radius: 3px;
	background-color: #2A265F;
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 5px;
	width: 66%;
}

.progress-text {
	font-size: 10px;
	opacity: 0.6;
	letter-spacing: 1px;
}

#btn {
	background-color: #2A265F;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	position: absolute;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
}

/* SOCIAL PANEL CSS */
.social-panel-container {
	position: fixed;
	right: 0;
	bottom: 80px;
	transform: translateX(100%);
	transition: transform 0.4s ease-in-out;
}

.social-panel-container.visible {
	transform: translateX(-10px);
}

.social-panel {	
	background-color: #fff;
	border-radius: 16px;
	box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
	border: 5px solid #001F61;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	font-family: 'Muli';
	position: relative;
	height: 150px;	
	width: 370px;
	max-width: calc(100% - 10px);
}

.social-panel button.close-btn {
	border: 0;
	color: #97A5CE;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 5px;
	right: 5px;
}

.social-panel button.close-btn:focus {
	outline: none;
}

.social-panel p {
	background-color: #001F61;
	border-radius: 0 0 10px 10px;
	color: #fff;
	font-size: 14px;
	line-height: 18px;
	padding: 2px 17px 6px;
	position: absolute;
	top: 0;
	left: 50%;
	margin: 0;
	transform: translateX(-50%);
	text-align: center;
	width: 235px;
}

.social-panel p i {
	margin: 0 5px;
}

.social-panel p a {
	color: #FF7500;
	text-decoration: none;
}

.social-panel h4 {
	margin: 20px 0;
	color: #97A5CE;	
	font-family: 'Muli';	
	font-size: 14px;	
	line-height: 18px;
	text-transform: uppercase;
}

.social-panel ul {
	display: flex;
	list-style-type: none;
	padding: 0;
	margin: 0;
}

.social-panel ul li {
	margin: 0 10px;
}

.social-panel ul li a {
	border: 1px solid #DCE1F2;
	border-radius: 50%;
	color: #001F61;
	font-size: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50px;
	width: 50px;
	text-decoration: none;
}

.social-panel ul li a:hover {
	border-color: #FF6A00;
	box-shadow: 0 9px 12px -9px #FF6A00;
}

.floating-btn {
	border-radius: 26.5px;
	background-color: #001F61;
	border: 1px solid #001F61;
	box-shadow: 0 16px 22px -17px #03153B;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	line-height: 20px;
	padding: 12px 20px;
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 999;
}

.floating-btn:hover {
	background-color: #ffffff;
	color: #001F61;
}

.floating-btn:focus {
	outline: none;
}

.floating-text {
	background-color: #001F61;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font-family: 'Muli';
	padding: 7px 15px;
	position: fixed;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	text-align: center;
	z-index: 998;
}

.floating-text a {
	color: #FF7500;
	text-decoration: none;
}

@media screen and (max-width: 480px) {

	.social-panel-container.visible {
		transform: translateX(0px);
	}
	
	.floating-btn {
		right: 10px;
	}
}



.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  height: 600px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
  </style>

  </head>
  <body>
    
   <?php require_once('./layout/header.php');?>
    <!-- END header -->
    
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>profile</h1>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->
    
    <section class="section">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-6">
            <div class="form-wrap overlap primary element-animate">
              <h2 class="h2">Update Your Profile</h2>
              <form action="./php/updatetrainer.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="hidden" class="form_control" name="id" value="<?php echo $_SESSION['id']; ?>">
                  <input type="text" class="form-control" name="trainername" placeholder="Enter Your Name" value="<?php echo $_SESSION['name']; ?>">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="traineremail" placeholder="Enter Email" value="<?php echo $_SESSION['email']; ?>">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" name="contact" placeholder="Enter Contect" value="<?php echo $_SESSION['contact']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="experience" placeholder="Enter Your Experience" value="<?php echo $_SESSION['experience']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="traineraddress" placeholder="Enter Address" value="<?php echo $_SESSION['address']; ?>">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="pass" placeholder="Password" value="<?php echo $_SESSION['pass']; ?>">
                </div>
                  <div class="form-group"> 
                  <input class="form-control"  type="file" id="DefaultFile" name="trainerprofile"  placeholder="../admin/imges/<?php echo $image; ?>"> 
                  <input class="form-control"  type="text" id="DefaultFile" name="oldtrainerprofile" value="../admin/imges/<?php echo $_SESSION['image']; ?>" placeholder="../admin/imges/<?php echo $image; ?>"> 

                  </div>
                 
                <div class="form-group">
                  <input type="submit" name="edittrainer" class="btn btn-warning btn-block py-3" value="Update account">
                </div>
              </form>
            </div>
          </div> -->

          <div class="col-md-6">
            <div class="form-wrap overlap element-animate" style="margin-top: -150px; width:700px; height: 700px;">
            <div class="media d-block media-custom text-center">
		<!-- <h2 style="text-align:center">User Profile Card</h2> -->

<div class="card">
	<a href="#"><img src="../admin/imges/<?php echo $_SESSION['image']; ?>" alt="Image Placeholder" class="img-fluid" style="height: 300px; width:300px"></a>
  <h1><?php echo $_SESSION['name']; ?></h1>
  <p class="title"><?php echo $_SESSION['gmail']; ?></p>
  <p><?php echo $_SESSION['contact']; ?></p>
  <p><?php echo $_SESSION['address']; ?></p>
<div style="margin: 10px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <a href="./edituser.php"><button>Update Profile</button></a>
</div>
          </div>
         
        </div>
      </div>
	  </div>  
	</div>
    </section>
    <main>

<div class="container">

  
  <?php 
 
 while($row = $result->fetch_assoc())
 {
        $id = $row['package_id'];
         $name = $row['username'];
         $image = $row['image'];
         $package_name = $row['package_name'];
        $image = $row['t_image'];
        $alot_time = $row['alot_time'];
        $price = $row['price'];
        $mobile = $row['contact'];
        $trainer_name = $row['name'];



?> 
 <div class="courses-container row">
<div class="course">
      <div class="course-preview">
<center><h3 style="font-size: 15px;"><u>Trainer Profile</u></h3></center><br>

<img src="../admin/imges/<?php echo $image; ?>" style="width: 150px; height:150px; border-radius:25px;">
            <!-- <h6>Package Name</h6><br>
<p><php echo $package_name; ?></p><br>
            <h6>Trainer Name</h6><br>
<p><php echo $trainer_name; ?></p>
            <a href="#">View all chapters <i class="fas fa-chevron-right"></i></a> -->
      </div>
      <div class="course-info">
<h6 style="font-size: 20px;">Package Name</h6><br>
<p style="font-size: 20px; color: #626567 ; "><?php echo $package_name; ?></p><br>
            <h6 style="font-size: 20px;">Trainer Name</h6><br>
<p  style="font-size: 20px; color: #626567 ; "><?php echo $trainer_name; ?></p>
            
</div>
<div class="course-info">
            <h6 style="font-size: 20px;">Timing</h6>
            <p  style="font-size: 20px; color: #626567 ; "><?php echo $alot_time;?></p><br><br>
            <h6 style="font-size: 20px;">Price</h6>
            <p  style="font-size: 20px; color: #626567 ; "><?php echo $price;?>
            
      </div>
</div>
</div>


 
 <!-- <article>
<section class="card">
<div class="text-content">
<h3><php echo  $trainer_name; ?></h3>
<p>Your website is often the first point of contact for potential customers. We believe great design can help elevate your brand and make a lasting impression.</p>  
<a href="#">Join now</a>
</div>
<div class="visual">
<img src="https://images.unsplash.com/photo-1548142813-c348350df52b?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMDU1NDY&ixlib=rb-4.0.3&q=80" alt="" />
</div>
</section> 

<section class="card">
<div class="text-content">
<h3>Responsive Design for Every Screen Size</h3>
<p>We specialize in creating responsive designs that look great on desktop, tablet, and mobile devices, ensuring your site is accessible to all your visitors.</p>  
<a href="#">Join now</a>
</div>
<div class="visual">
<img src="https://images.unsplash.com/photo-1564460576398-ef55d99548b2?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMDU1NDY&ixlib=rb-4.0.3&q=80" alt="" />
</div>
</section> 

<section class="card">
<div class="text-content">
<h3>Design that Speaks to Your Audience</h3>
<p>We work closely with you to understand your brand and your customers, so we can create a website that speaks directly to your target audience.</p>  
<a href="#">Join now</a>
</div>
<div class="visual">
<img src="https://images.unsplash.com/photo-1631085274261-0ace0296eaa0?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMTExMDg&ixlib=rb-4.0.3&q=80" alt="" />
</div>
</section> 

<section class="card">
<div class="text-content">
<h3>Design that Drives Results for Your Business</h3>
<p>We specialize in creating websites that not only look great but also drive traffic and conversions. Let us help you create a website that delivers real business value.</p>  
<a href="#">Join now</a>
</div>
<div class="visual">
<img src="https://images.unsplash.com/photo-1611703372231-02ffff8abee6?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NzgzMTEyNTU&ixlib=rb-4.0.3&q=80" alt="" />
</div>
</section> 
</article> -->
<?php } ?>
   

  <!-- End of gallery -->

  

</div>
<!-- End of container -->

</main>

    <!-- <php require_once('./layout/footer.php')?> -->

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