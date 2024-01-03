<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php //echo $_SESSION["s_username"];?>Admin</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
             <a href="#" class="nav-link">
               <i class="nav-icon fas fa-home"></i>
               <p>
              Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./mangeUser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./manageTrainer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Trainer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./managePackage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Pakages</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="./manageBooking.php" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
              Manage Booking
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./ConfirmBooking.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Confirm Booking
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./trainerSchedule.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
             Trainer Shedule
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./php/logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt" aria-hidden="true"></i>
              <p>
             Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  