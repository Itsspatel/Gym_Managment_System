<?php
require_once('../include/db.php');
$sql = "SELECT * FROM `trainer`";
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
              <li class="breadcrumb-item active"><a href="./addTrainer.php" id="add-new-user" class="btn btn-primary">Add Trainer</a></li>
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
                      <th>Trainer Name</th>
                      <th>Contact</th>
                      <th>image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="load-table">
                  <tr>
                  <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
                      <td><?php echo $row["id"];?></td>
                      <td ><?php echo $row["name"];?></td>
                      <td ><?php echo $row["phone"];?></td>
                      <td ><img src="./imges/<?php echo $row["t_image"];?>" style="width: auto; height:50px;"></td>

                      <td>
                        <a href="viewTrainerSchedule.php?id=<?php echo $row["id"];?>"><i class="fa fa-eye"></i></a>&nbsp; &nbsp; &nbsp;
                        <a href="editTrainer.php?id=<?php echo $row["id"];?>"><i class="fa fa-edit"></i></a>&nbsp; &nbsp; &nbsp;
                        <a href="./php/deletetrainer.php?id=<?php echo $row["id"]?>"   id="delete-icon"><i class="fa fa-trash" aria-hidden="true"></i></a>  
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