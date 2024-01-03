<?php
require_once('../include/db.php');
$sql = "SELECT * FROM `package`";
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
            <h1 class="m-0">Manage Package</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="./addPackage.php" id="add-new-user" class="btn btn-primary">Add Package</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->
    <section class="content">
     <div class="container-fluid">
      <div class="card">
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                    <th>#</th>
                      <th>Package Name</th>
                      <th>Pakage Details</th>
                      <th>Pakage Price</th>
                      <th>Pakage Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="load-table">
                  <tr>
                  <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
                      <td><?php echo $row["package_id"];?></td>
                      <td ><?php echo $row["package_name"];?></td>
                      <td ><?php echo $row["pacakge_details"];?></td>
                      <td ><img src="./imges/<?php echo $row["p_image"];?>" style="width: auto; height:50px;"></td>

                      <td ><?php echo $row["price"];?></td>

                      <td>
                        <!-- <a href="view.php?id=<php echo $row["package_id"];?>"><i class="fa fa-eye"></i></a>&nbsp; &nbsp; &nbsp; -->
                        <a href="editPackage.php?id=<?php echo $row["package_id"];?>"><i class="fa fa-edit"></i></a>&nbsp; &nbsp; &nbsp;
                        <a href="#" data-id="<?php echo $row['package_id'];?>"  id="delete-icon"><i class="fa fa-trash" aria-hidden="true"></i></a>  
                    </td>   
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
   <!-- /.content -->
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