<?php
require_once('../include/db.php');
$trainer_id=$_GET['id'];
$sql = "SELECT * from booking left join user on booking.user_id= user.id left join package on booking.package_id = package.package_id where booking.alot_trainer = $trainer_id";
$result= mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once("./layout/haeder.php");?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="./dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <?php 
  require_once("./layout/navbar.php") ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Gym_Fitness</span>
    </a>

    <!-- Sidebar -->
    <?php require_once("./layout/sidebar.php");?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Trainer Schedule</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="./trainerSchedule.php" id="add-new-user" class="btn btn-primary">Back</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->
    <section class="content">
         <div class="container-fluid">
         <div class="row">
          
        
         <?php 
       
       while($row = $result->fetch_assoc())
       {
              $id = $row['package_id'];
               $name = $row['username'];
               $image = $row['image'];
               $package_name = $row['package_name'];
              $image = $row['image'];
              $alot_time = $row['alot_time'];
              $price = $row['price'];
              $mobile = $row['contact'];



     ?> 
 <div class="col-md-6">
<div class="card card-widget widget-user shadow-lg">

<div class="widget-user-header text-white" style="background: url('./imges/coverimage.jpg') center center;">
<h3 class="widget-user-username text-right"><?php echo $name; ?></h3>
<h5 class="widget-user-desc text-right"><?php echo $package_name; ?></h5>
</div>
<div class="widget-user-image">
<img class="img-circle" src="./imges/<?php echo $image; ?>" alt="User Avatar" style="width: 20%; height: 15%;">
</div>
<div class="card-footer">
<div class="row">
<div class="col-sm-4 border-right">
<div class="description-block">
<h5 class="description-header">Timing</h5>
<span class="description-text"><?php echo $alot_time; ?></span>
</div>

</div>

<div class="col-sm-4 border-right">
<div class="description-block">
<h5 class="description-header">Package Price</h5>
<span class="description-text"><?php echo $price; ?></span>
</div>

</div>

<div class="col-sm-4">
<div class="description-block">
<h5 class="description-header">User Contact</h5>
<span class="description-text"><?php echo $mobile; ?></span>
</div>

</div>

</div>

</div>
</div>
 </div>
<?php }?>


         </div>
            <!-- /.card -->
            </div>
          </section>
  </div>
  <?php require_once("./layout/footer.php"); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php require_once("./layout/footer_links.php");?>    