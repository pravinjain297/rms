<?php

session_start();
include'../db.php';
if(!(isset($_SESSION['c_username'])) || !(isset($_SESSION['c_name'])))
{
echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";
}
 ?>

<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../http://www.urbanui.com/"/>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
         <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
           <a class="navbar-brand brand-logo" href="index-2.html"><img src="../images/logo.svg" alt="logo"/></a>
           <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="../images/logo-mini.svg" alt="logo"/></a>
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
           <ul class="navbar-nav navbar-nav-right">
                      
          
             <li class="nav-item nav-profile dropdown">
               <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                 <img src="../images/faces/face5.jpg" alt="profile"/>
               </a>
               <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                 <a class="dropdown-item">
                   <i class="fas fa-cog text-primary"></i>
                   Settings
                 </a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item">
                   <i class="fas fa-power-off text-primary"></i>
                   Logout
                 </a>
               </div>
             </li>
            
           </ul>
           <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
             <span class="fas fa-bars"></span>
           </button>
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
              Dashboard
            </h3>
          </div>
         
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card gradient-1" >
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-user"></i>
                    Collector Count
                  </h4>
                   <?php 
                   include "../db.php";
                        $count = 1;
                        $asd = mysqli_query($con,"select * from collector_info") or die (mysqli_error($con));
                        $Total = mysqli_num_rows($asd);
                        ?>
                    
                  <h2 class="mb-5"><?php echo $Total; ?><span class="text-muted h4 font-weight-normal"></span></h2>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-users"></i>
                    Users Count
                  </h4>
                  <?php 
                  include "../db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select * from user_info") or die (mysqli_error($con));
                   $Total = mysqli_num_rows($asd);
                  ?>
                  <h2 class="mb-5"><?php echo $Total; ?> <span class="text-muted h4 font-weight-normal"></span></h2>
                  
                </div>
              </div>
            </div>

             <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-chart-line"></i>
                    Amount Distributed
                  </h4>
                  <?php 
                  include "../db.php";
                  $count = 1;
                  $asd = mysqli_query($con,"select sum(user_loan_amt) as value_sum from user_info") or die (mysqli_error($con));
                  $row = mysqli_fetch_assoc($asd); 
                  $sum = $row['value_sum'];
                  ?>
                  <h2 class="mb-5"><?php echo $sum; ?> <span class="text-muted h4 font-weight-normal"></span></h2>
                  
                </div>
              </div>
            </div>
        
           <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-chart-line"></i>
                    Collection Today
                  </h4>
                  <?php 
                  include "../db.php";
                  $count = 1;
                  $a=date("YY-MM-DD");
                  $asd = mysqli_query($con,"select sum(user_loan_amt) as value_sum from user_info") or die (mysqli_error($con));
                  $row = mysqli_fetch_assoc($asd); 
                  $sum = $row['value_sum'];
                  ?>
                  <h2 class="mb-5">45000 <span class="text-muted h4 font-weight-normal"> </span></h2>
                  
                </div>
              </div>
            </div>

             <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-chart-line"></i>
                    Pending Collection
                  </h4>
                  <?php 
                  include "../db.php";
                  $count = 1;                  
                  $asd = mysqli_query($con,"select sum(user_loan_amt) as value_sum from user_info") or die (mysqli_error($con));
                  $row = mysqli_fetch_assoc($asd); 
                  $sum = $row['value_sum'];

                  $asd1 = mysqli_query($con,"select sum(pay_amt) as value_sum from payment_info") or die (mysqli_error($con));
                  $row1 = mysqli_fetch_assoc($asd1); 
                  $sum1 = $row1['value_sum'];

                  $total=$sum-$sum1;
                  ?>
                  <h2 class="mb-5"> <?php echo $total; ?>  <span class="text-muted h4 font-weight-normal"> </span></h2>
                  
                </div>
              </div>
            </div>
          <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-chart-line"></i> 
                   Total Collection
                  </h4>
                  <?php 
                  include "../db.php";
                  $count = 1;
                 
                  $asd = mysqli_query($con,"select sum(pay_amt) as value_sum from payment_info") or die (mysqli_error($con));
                  $row = mysqli_fetch_assoc($asd); 
                  $sum = $row['value_sum'];
                  ?>
                  <h2 class="mb-5"><?php echo $sum; ?><span class="text-muted h4 font-weight-normal"> </span></h2>
                  
                  
                </div>
              </div>
            </div>
        
       
           
           
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">
                    <i class="fas fa-tachometer-alt"></i>
                    Daily Sales
                  </h4>
                  <p class="card-description">Daily sales for the past one month</p>
                  <div class="flex-grow-1 d-flex flex-column justify-content-between">
                    <canvas id="daily-sales-chart" class="mt-3 mb-3 mb-md-0"></canvas>
                    <div id="daily-sales-chart-legend" class="daily-sales-chart-legend pt-4 border-top"></div>
                  </div>
                </div>
              </div>
            </div>
          

        

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       <?php include "../footer.php";?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/misc.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
