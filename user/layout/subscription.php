<?php require_once('./../include/db.php'); 
$sql = "SELECT * FROM `package`";
$result= mysqli_query($conn, $sql); 

if(!isset($_SESSION['name'] ) && !isset( $_SESSION['role']) && $_SESSION['role'] == "user") { 
?>

<section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Select Package</h2>
              <span class="back-text">Our Blog</span>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
       <?php 
       
           while($row = $result->fetch_assoc())
           {
                  $id = $row['package_id'];
                   $package_name = $row['package_name'];
                   $price = $row['price'];
                   $package_details = $row['pacakge_details'];
                  $image = $row['p_image'];

         ?>        
      
          <div class="col-md-6" style="margin-bottom: 20px;">
            <div class="blog d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('./../admin/imges/<?php echo  $image; ?>');"></div>
              <div class="text">
                <h3><?php echo $package_name;?></h3>
                <p class="sched-time">
                  <!-- <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br> -->
                </p>
                <p><?php echo $package_details; ?></p>
                
                <p><a  href="./test.php?id=<?php echo  $_SESSION['id']; ?> && card_id=<?php echo $id ?> && card_price=<?php echo$price?>" class="btn btn-primary btn-sm" id="pay"><?php echo $price; ?></a></p>
                
              </div>
              
            </div>
          </div>
          
        
      <?php 
           }  
    }
      $conn->close();
      ?>
</div>
      </div>
    </section> <!-- .section -->
    
  
    
    
