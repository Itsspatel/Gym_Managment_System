<?php
require_once('../include/db.php');
$sql = "SELECT * FROM `user`";
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
            <h1 class="m-0">Manage Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="./addUser.php" id="add-new-user" class="btn btn-primary">Add User</a></li>
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
                      <th>Username</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="load-table">
                    <tr>
                  <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
                      <td><?php echo $row["id"];?></td>
                      <td ><?php echo $row["username"];?></td>
                      <td ><?php echo $row["contact"];?></td>
                      <td ><?php echo $row["gmail"];?></td>
                      <td>
                        <a href="viewUser.php?id=<?php echo $row["id"];?>"><i class="fa fa-eye"></i></a>&nbsp; &nbsp; &nbsp;
                        <a href="editUser.php?id=<?php echo $row["id"];?>"><i class="fa fa-edit"></i></a>&nbsp; &nbsp; &nbsp;
                        <a href="./php/deleteuser.php" data-id="<?php echo $row['id'];?>"  id="delete-icon"><i class="fa fa-trash" aria-hidden="true"></i></a>  
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
   <div class="modal fade" id="delete-modal" style="display: none;">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are Sure You want to delete this user !!</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger" id="delete-user">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
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
<script>
  $(document).on("click","#delete-icon",function(){
     $("#delete-modal").modal("show");
     var uid = $(this).attr("data-id");
     $("#delete-user").on("click",function(){
      
     // alert(uid);
      $.ajax({
        url : "./php/deleteuser.php",
        type : "post",
        data : {sid: uid},
        success : function(data){
        
          $("#delete-modal").modal("hide");
          
        }
      });
     });
  });
  </script>