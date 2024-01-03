<?php 
require_once("../include/db.php");
$user_id = $_GET['id'];
$sql = "SELECT * FROM `user` WHERE `id`= $user_id";
$result= mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row["id"];
  $username = $row["username"];
  $gmail = $row["gmail"];
  $contact = $row["contact"];
  $address = $row["address"];
  $password = $row["password"];
  $image = $row["image"];
  $status = $row["status"];
  

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
            <h3 class="m-0">Edit User</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="./mangeUser.php" id="back-firm" class="btn btn-primary">Back</a></li>
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
                <form id="add-customer-form" action="./php/editUser.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-6 form-group">
                  <label>Name</label>
                  <input type="hidden" class="form-control" placeholder="Name" name="id" autocomplete="off" value="<?php echo $id;?>"  required>
                    <input type="text" class="form-control" placeholder="Name" name="editName" autocomplete="off" value="<?php echo $username;?>"  required>
                  </div>
                  <div class="col-6 form-group">
                  <label>Mobile</label>
                    <input type="text" class="form-control" placeholder="Mobile" name="editMobile" autocomplete="off" value="<?php echo $contact; ?>">
                  </div>
                  <div class="col-6 form-group">
                  <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email " name="editEmail" autocomplete="off" value="<?php echo $gmail ;?>" required>
                  </div>
                  <div class="col-6 form-group">
                  <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="editpassword" autocomplete="off" value="<?php echo $password; ?>">
                  </div>
                  <div class="col-6 form-group">
                  <label>Address</label>
                    <input type="text" class="form-control" placeholder="Password" name="editaddress" autocomplete="off" value="<?php echo $address; ?>" required>
                  </div>
                  <div class="col-6 form-group">
                  <input type="hidden"  name="profileimageold" value="<?php echo $image; ?>" >
                    <label for="exampleInputFile">Update Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="p-img" name="editprofileimage" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 form-group">
                  <label>Profile Image</label><br>
                    <img src="imges/<?php echo $image ;?>" style="width: auto; height:90px" />
                  </div>
                 
                </div>
                <input type="submit" name="edituser"  class="btn btn-warning btn-lg float-right" id="add-customer" value="Edit User"> 
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
