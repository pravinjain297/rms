<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="../images/faces/face5.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome <?php echo $_SESSION['c_name']?>
                </p>
                <p class="designation">
                  Collector
                </p>
              </div>
            </div>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fas fa-user menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="collector_profile.php">
              <i class="fas fa-user menu-icon"></i>
              <span class="menu-title">Collector</span>
            </a>
          </li>     
          
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fas fa-users menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
              <ul class="nav flex-column sub-menu">
                
                <li class="nav-item"> <a class="nav-link" href="view_user.php">View User</a></li>               
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="far fa-compass menu-icon"></i>
              <span class="menu-title">Payment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="initial_payment.php">Initial Payment</a></li>
                <li class="nav-item"> <a class="nav-link" href="payment_user_list.php">Payment User List</a></li>
                <li class="nav-item"> <a class="nav-link" href="payee_details.php">Recent Transaction</a></li>
             
              </ul>
              </div>
          </li>


          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="far fa-compass menu-icon"></i>
              <span class="menu-title">Payment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="initial_payment.php">Initial Payment</a></li>
                <li class="nav-item"> <a class="nav-link" href="payment_user_list.php">Payment User List</a></li>
                <li class="nav-item"> <a class="nav-link" href="payee_details.php">Recent Transaction</a></li>
             
              </ul>
              </div>
          </li> -->
       
        </ul>
      </nav> 