    <!-- Content Wrapper -->
    
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <?php 
            
          ?>
          <!-- Topbar Search-->
          <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
            <h3>
            <?php 
              switch ($request) {
                case '/' :
                    echo 'Dashboard';
                    break;
                case '/server' :
                    echo 'Server';
                    break;
                case '/client/manage' && '/client/manage?addclient' && '/client/manage?detailclient':
                    echo 'Client Management';
                    break;
                case '/users' && '/users?add' && '/users?edit' :
                    echo 'User Management';
                    break;
                }
            ?>
            </h3>
          </div> 

      <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
          
            <div class="topbar-divider d-none d-sm-block"></div>
<?php
    include 'config/dbconn.php';
    $sesname = $_SESSION['username'];
    $user = mysqli_query($conn,"select * from users where user='$sesname'");
    $r = mysqli_fetch_array($user);
?>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $r['fname'];?></span>
                <img class="img-profile rounded-circle" src="http://prakerin.uny.ac.id/public_html/sites/default/files/styles/list_foto/public/Indra%20Hari%20S.JPG?itok=0EZhNNUY">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
