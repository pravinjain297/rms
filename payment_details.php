<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        
        
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
  
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include "navbar.php";?>
      <!-- partial -->
     <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Payment Calculations
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Payment</a></li>
                <li class="breadcrumb-item active" aria-current="page">Payment Calculations</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Payment Calculations</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                    <form class="forms-sample" method="POST" action="" id="">
                    <div class="form-group">
                    
                    
                      <?php
                      include "db.php";
                      extract($_GET);
                 //   $select = "select * from cust_master where cid='$cid' ";
                      $query = mysqli_query($con,"select * from user_info where user_id='$user_id'") or die(mysqli_error($con));

                      while ($fetch1=mysqli_fetch_array($query)) 
                      {
                       extract($fetch1);
                      ?>
                      
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name</label>
                      <input type="text" class="form-control" onkeyup="calculate()" Name="pay" placeholder="Enter Name" value="<?php echo $fetch1['user_name'];?>" Readonly>
                    </div>

                   <?php if($fetch1['user_status']=='1'){?>

                  </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Amount</label>
                      <input type="text" class="form-control" value ="<?php echo $fetch1['user_loan_amt'];?>" id="amt" Name="amt" placeholder="Enter Amount" readonly>
                      <?php } else { 

                     
                      $q = mysqli_query($con,"SELECT * FROM payment_info WHERE user_id='$user_id' ORDER BY p_id DESC LIMIT 1") or die(mysqli_error($con));

                      while ($fetch1=mysqli_fetch_array($q)) 
                      {
                       extract($fetch1);



                      ?>
                      <label for="exampleInputUsername1">Amount</label>
                      <input type="text" class="form-control" value ="<?php echo $fetch1['remaining_amt'];?>" id="amt" Name="amt" placeholder="Enter Amount" readonly>
                    </div>
                     <?php  } }}?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Payable Amount</label>
                      <input type="text" class="form-control" onkeyup="calculate()" id="pay" Name="pay" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUseraddress1">Remaining Credit</label>
                      <input type="text" class="form-control" id="remain" Name="remaining_amt" placeholder="" readonly>
                    </div>
                  
                   
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <?php include "footer.php";?>
        <!-- partial -->
      </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
<script type="">
  
  function calculate()
  {
          var bq1=parseInt(document.getElementById('amt').value);
          var bp1=parseInt(document.getElementById('pay').value);
          var total1=parseFloat(bq1)-parseFloat(bp1);
          var total2=parseFloat(total1).toFixed(2);
          document.getElementById('remain').value=total2;
  }
</script>


<?php
include'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
extract($_POST);

if(mysqli_query($con,"select `user_status` from `user_info` where `user_id`='$user_id'")=='1')
{
  $a=mysqli_query($con,"UPDATE `user_info` SET `user_status` = '0' WHERE user_id='$user_id'")or die(mysqli_error($con));
  if($a)
  {
    echo $a;
  }
}
else{
  $date=date("Y/m/d");
$query="INSERT INTO `payment_info`(`user_id`, `total_amt`, `remaining_amt`, `pay_amt`, `date_pay_amt`) VALUES ('$user_id','$amt','$remaining_amt','$pay','$date')";
$q="UPDATE `user_info` SET `user_status` = '0' WHERE user_id='$user_id'";
$up = mysqli_query($con,$q)or die(mysqli_error($con));
$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd || $a)
{
  echo '<script type="text/javascript">';
  echo " alert('Amount Paid Successfully');";
  echo 'window.location.href = "payment_user_list.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill Again The Registration Form.');";
  echo 'window.location.href = "payment_details.php";';
  echo '</script>';
}

}
}
?>