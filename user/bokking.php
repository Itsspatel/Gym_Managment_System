<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script></head>
</head>
<!-- Modal -->

            
           
            

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalNatasha">

  Open modal
  
</button> -->
<!-- <php require_once("./layoyt/navbar.php");
require_once("./action/db_conn.php");
  ?> -->
    <div class="modal-dialog modal-dialog-centered" >
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
            <?php 
            $user_id= $_GET["id"];
            $card_id = $_GET["card_id"];
            $card_price = $_GET["card_price"];
           ?>
        <h3>Payable Ammount <span>₹<?php echo $card_price;?></span></h3>
        <!-- <php }?> -->
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
         <input type="hidden" value="<?php echo $user_id?>" name="userid">
         <input type="hidden" value="<?php echo $card_id?>" name="cardid">
         <input class="btn btn-primary float-right mt-5" type="submit" name="in_btn_payment" value="Pay" id="BtnForPayment" style="margin-right: 15px;"> 
         <a href="./afterloginuser.php"><input class="btn btn-Defult float-start border border-dark mt-5"  value="Close"  style="margin-right: 15px;" type="button"> </a>

         </form>  
        </div>
      </div>   
    </div>
    <?php
    require_once("../include/db.php");
    

    if(isset($_POST["in_btn_payment"])){
        $b_user_id = $_POST['userid'];
        $b_card_id = $_POST['cardid'];    
      $pay_create = "INSERT  INTO booking(user_id , package_id ,payment_status) VALUES($b_user_id,$b_card_id,'Confirm')";
      if(($pay_result = mysqli_query($conn,$pay_create)) == true){
        header("location:../userprofile.php#booking-page");
        echo'1';
      }else{
        echo'0';
      }

    }
    ?>
    
 </body>
</html>
