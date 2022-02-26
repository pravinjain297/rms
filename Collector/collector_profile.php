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


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:54 GMT -->
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
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../index-2.html"><img src="../images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../index-2.html"><img src="../images/logo-mini.svg" alt="logo"/></a>
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
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="fas fa-ellipsis-h"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../partials/_settings-panel.html -->
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
      <!-- partial:../partials/_sidebar.html -->
      <?php include "navbar.php";?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Profile
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Collector</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        <img src="../images/faces/face12.jpg" alt="profile" class="img-lg rounded-circle mb-3"/>
                        <p>Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p>
                        <div class="d-flex justify-content-between">
                          <button class="btn btn-success">Hire Me</button>
                          <button class="btn btn-success">Follow</button>
                        </div>
                      </div>
                      <div class="border-bottom py-4">
                        <p>Skills</p>
                        <div>
                          <label class="badge badge-outline-dark">Chalk</label>
                          <label class="badge badge-outline-dark">Hand lettering</label>
                          <label class="badge badge-outline-dark">Information Design</label>
                          <label class="badge badge-outline-dark">Graphic Design</label>
                          <label class="badge badge-outline-dark">Web Design</label>  
                        </div>                                                               
                      </div>
                      <div class="border-bottom py-4">
                        <div class="d-flex mb-3">
                          <div class="progress progress-md flex-grow">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="progress progress-md flex-grow">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                          <span class="float-right text-muted">
                            Active
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Phone
                          </span>
                          <span class="float-right text-muted">
                            006 3435 22
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Mail
                          </span>
                          <span class="float-right text-muted">
                            Jacod@testmail.com
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Facebook
                          </span>
                          <span class="float-right text-muted">
                            <a href="#">David Grey</a>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Twitter
                          </span>
                          <span class="float-right text-muted">
                            <a href="#">@davidgrey</a>
                          </span>
                        </p>
                      </div>
                      <button class="btn btn-primary btn-block">Preview</button>
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>David Grey. H</h3>
                          <div class="d-flex align-items-center">
                            <h5 class="mb-0 mr-2 text-muted">Canada</h5>
                            <select id="profile-rating" name="rating" autocomplete="off">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                        </div>
                        <div>
                          <button class="btn btn-outline-secondary btn-icon">
                            <i class="far fa-envelope"></i>
                          </button>
                          <button class="btn btn-primary">Request</button>
                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <ul class="nav profile-navbar">
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="fa fa-user"></i>
                              Info
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">
                              <i class="fas fa-file"></i>
                              Feed
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="fa fa-calendar"></i>
                              Agenda
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">
                              <i class="far fa-file-word"></i>
                              Resume
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="profile-feed">
                        <div class="d-flex align-items-start profile-feed-item">
                          <img src="../images/faces/face13.jpg" alt="profile" class="img-sm rounded-circle"/>
                          <div class="ml-4">
                            <h6>
                              Mason Beck
                              <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>10 hours</small>
                            </h6>
                            <p>
                              There is no better advertisement campaign that is low cost and also successful at the same time.
                            </p>
                            <p class="small text-muted mt-2 mb-0">
                              <span>
                                <i class="fa fa-star mr-1"></i>4
                              </span>
                              <span class="ml-2">
                                <i class="fa fa-comment mr-1"></i>11
                              </span>
                              <span class="ml-2">
                                <i class="fa fa-mail-reply"></i>
                              </span>
                            </p>
                          </div>
                        </div>
                        <div class="d-flex align-items-start profile-feed-item">
                          <img src="../images/faces/face16.jpg" alt="profile" class="img-sm rounded-circle"/>
                          <div class="ml-4">
                            <h6>
                              Willie Stanley
                              <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>10 hours</small>
                            </h6>
                            <img src="../images/samples/1280x768/12.jpg" alt="sample" class="rounded mw-100"/>                            
                            <p class="small text-muted mt-2 mb-0">
                              <span>
                                <i class="fa fa-star mr-1"></i>4
                              </span>
                              <span class="ml-2">
                                <i class="fa fa-comment mr-1"></i>11
                              </span>
                              <span class="ml-2">
                                <i class="fa fa-mail-reply"></i>
                              </span>
                            </p>
                          </div>
                        </div>
                        <div class="d-flex align-items-start profile-feed-item">
                          <img src="../images/faces/face19.html" alt="profile" class="img-sm rounded-circle"/>
                          <div class="ml-4">
                            <h6>
                              Dylan Silva
                              <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>10 hours</small>
                            </h6>
                            <p>
                              When I first got into the online advertising business, I was looking for the magical combination 
                              that would put my website into the top search engine rankings
                            </p>
                            <img src="../images/samples/1280x768/5.jpg" alt="sample" class="rounded mw-100"/>                                                        
                            <p class="small text-muted mt-2 mb-0">
                              <span>
                                <i class="fa fa-star mr-1"></i>4
                              </span>
                              <span class="ml-2">
                                <i class="fa fa-comment mr-1"></i>11
                              </span>
                              <span class="ml-2">
                                <i class="fa fa-mail-reply"></i>
                              </span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
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
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/misc.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/profile-demo.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:09:00 GMT -->
</html>
