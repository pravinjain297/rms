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
              Edit Collector
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Collector</a></li>
                <li class="breadcrumb-item"><a href="view_collector.php">Collector</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Collector</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Collector</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                   <?php 
                  include "db.php";
                  $asd = mysqli_query($con,"select * from collector_info where c_id='".$_GET['c_id']."'") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                  <?php while($fetch=mysqli_fetch_array($asd)){
                  extract($fetch)

                  ?>
                  <form class="forms-sample" method="POST" action="" id="">
                    <div class="form-group">
                      <input type="hidden" name="c_id" value="<?php echo $c_id;?>">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $c_name;?>" Name="name1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile Number</label>
                      <input type="text" class="form-control" id="exampleInputmobilenumber" value="<?php echo $c_mobile;?>" Name="mobilenumber" placeholder="Mobile Number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $c_email;?>" Name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $c_username;?>" Name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $c_password;?>" Name="password" placeholder="Password">
                    </div>
                    
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
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
include'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
extract($_POST);
$query="INSERT INTO `collector_info`( `c_name`, `c_mobile`, `c_email`, `c_username`, `c_password`, `c_status`) VALUES ('$name1','$mobilenumber','$email','$username','$password','1')";

$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Collector Update Successfully');";
  echo 'window.location.href = "view_collector.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill Again The Registration Form.');";
  echo 'window.location.href = "add_collector.php";';
  echo '</script>';
}

}
?>