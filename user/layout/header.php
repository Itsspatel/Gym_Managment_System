
<header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">Fitne<span>zz</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php
         
         if(!isset($_SESSION['name'] ) && !isset( $_SESSION['role'])){ ?>
         
          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mr-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
             
            </ul>
          
          
            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="member.php">Become a member</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="trainersinup.php">Become a trainer</a>
              </li>
            </ul>
           <?php } 
           else{?>
                  <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mr-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="afterloginuser.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
             
             
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
             
            </ul>
          

               <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "user"){ ?>
              <li class="nav-item cta-btn">
                <a class="nav-link" href="./userprofile.php">profile</a>
              </li>&nbsp;&nbsp;&nbsp;
              <?php }
              else{ ?>
                            <li class="nav-item cta-btn">
                <a class="nav-link" href="./trainerprofile.php">profile</a>
              </li>&nbsp;&nbsp;&nbsp;
              <?php } ?>
              <li class="nav-item cta-btn">
                <a class="nav-link" href="./php/logout.php">logout</a>
              </li>
               </ul>
            <!-- </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="./php/logout.php">logout</a>
              </li>
            </ul> -->
            
            <?php }
            ?>
           
          </div>
        </div>
      </nav>
    </header>