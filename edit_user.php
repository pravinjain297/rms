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
              Add User
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add User</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add User</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                   <?php 
                  include "db.php";
                  $asd = mysqli_query($con,"select * from user_info where user_id='".$_GET['user_id']."'") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                  <?php while($fetch=mysqli_fetch_array($asd)){
                  extract($fetch)

                  ?>
                  <form class="forms-sample" method="POST" action="" id="">
                    <div class="form-group">
                     <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                      <label for="exampleInputname1">Name</label>
                      <input type="text" class="form-control"  value="<?php echo $user_name;?>" Name="user_name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile Number</label>
                      <input type="text" class="form-control"  value="<?php echo $user_mobile_no;?>" Name="user_mob_no" placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" class="form-control"  value="<?php echo $user_email_id;?>" Name="user_email_id" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUseraddress1">Address</label>
                      <input type="textarea" class="form-control"  value="<?php echo $user_address;?>" Name="user_address" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUserdate1">Date</label>
                      <input type="date" class="form-control"  value="<?php echo $user_date;?>" Name="user_date" placeholder="Enter Date on which amount Purchased" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputamount1">Amount</label>
                      <input type="text" class="form-control"  value="<?php echo $user_loan_amt;?>" Name="user_loan_amt" placeholder="Enter the Main Amount(loan Amount)" Readonly>
                    </div>
                    <button type="submit" value="" name="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                 <?php }?>
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
<?php

   include("db.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
    {
  extract($_POST);
  $query="UPDATE `user_info` SET `user_name`='$user_name',
                                      `user_mobile_no`='$user_mob_no',
                                      `user_email_id`='$user_email_id',
                                      `user_address`='$user_address'
                                       WHERE `user_id`='$user_id';";

  echo $asd = mysqli_query($con,$query) or die(mysqli_error($con));
  if($asd)
  {
    echo '<script type="text/javascript">';
    echo " alert('User Updated Successfully');";
    echo 'window.location.href = "view_user.php"';
    echo '</script>';
  }  
  else
  {
    echo '<script type="text/javascript">';
    echo " alert('Sorry...Cant Updated ');";
    echo 'window.location.href = "view_user.php"';
    echo '</script>';
  }

}
?>
