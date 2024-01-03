<?php 
require_once("../include/db.php");
$id = $_GET['id'];
//$sql = "SELECT * FROM user LEFT JOIN package ON user.id = package.package_id LEFT JOIN booking ON package.package_id=booking.b_id";
$sql = "SELECT * FROM booking LEFT JOIN package ON booking.package_id = package.package_id LEFT JOIN user ON booking.user_id=user.id WHERE b_id = $id";

$result= mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row["b_id"];
  $Username = $row["username"];
  $mobile = $row["contact"];
 $Aloted_Trainer = $row["alot_trainer"];
  $Timing = $row["alot_time"];
  $Payment_Status=$row["payment_status"];
  $Booking_Status = $row["boking_status"];
  
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("./layout/haeder.php");?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
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
            <h3 class="m-0">View Booking Details</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="./manageBooking.php" id="back-firm" class="btn btn-primary">Back</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
      <div class="card card-primary">
      <div class="card-body">
      <div id="loader-add-customer" style="display:none;" class="overlay">
              <i class="fa fa-refresh fa-spin"></i>
              </div>
                <form id="add-customer-form">
                <div class="row">
                  <div class="col-6 form-group">
                  <label>Username</label>
                    <input type="text" class="form-control" placeholder="Name" name="CustName" value="<?php echo $Username;?>" autocomplete="off" id="Cust-name" required>
                  </div>
                  <div class="col-6 form-group">
                  <label>Mobile</label>
                    <input type="text" class="form-control" placeholder="Mobile" name="CustMobile" value="<?php echo $mobile;?>"  autocomplete="off" id="Cust-Mobile">
                  </div>
                  <div class="col-6 form-group">
                  <label>Aloted Trainer</label>
                    <input type="text" class="form-control" placeholder="Trainer " name="CustName" value="<?php echo $Aloted_Trainer;?>"  autocomplete="off" id="Cust-name" required>
                  </div>
                  <div class="col-6 form-group">
                  <label>Timing</label>
                    <input type="text" class="form-control" placeholder="Timming" name="CustName" value="<?php echo $Timing;?>"  autocomplete="off" id="Cust-name" required>
                  </div>
                  <div class="col-6 form-group">
                  <label>Payment Status</label>
                    <input type="text" class="form-control" placeholder="Timming" name="CustName" value="<?php echo $Payment_Status;?>"  autocomplete="off" id="Cust-name" required>
                  </div>
                  <div class="col-6 form-group">
                  <label>Booking Status</label>
                    <input type="text" class="form-control" placeholder="Timming" name="CustName" value="<?php echo $Booking_Status;?>"  autocomplete="off" id="Cust-name" required>
                  </div>
                  
                </div>
                <a href="./manageBooking.php"><input type="button" class="btn btn-primary btn-lg float-right" id="add-customer" value="Close"></a> 
              </form>
              </div>
               <!-- /.card-body -->
              </div>
   <!-- /.content -->
      </div>
      </section>
      </div>
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
</body>
</html>
