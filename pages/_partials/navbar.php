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
            
              $id = '0';
              $id_rra = '0';
              if(isset($_GET['detail']) != '0'){
                $id = $_GET['detail'];
              } else if(isset($_GET['bill']) != '0'){
                $id = $_GET['bill'];
              } else if(isset($_GET['detailGraph']) != '0'){
                $id = $_GET['detailGraph'];
              } else if(isset($_GET['edit']) != '0'){
                $id = $_GET['edit'];
              } else if(isset($_GET['showGraph']) != '0'){
                $id = $_GET['showGraph'];
                if(isset($_GET['rra_id']) != '0'){
                  $id_rra = $_GET['rra_id'];
                }
              } 
              switch ($request) {
                case '/' :
                    echo 'Dashboard';
                    break;
                case '/server' :
                    echo 'Server';
                    break;
                case '/client/manage':
                    echo 'Client Management';
                    break;
                case '/client/manage?addclient':
                    echo 'Client Management';
                    break;
                case '/client/manage?detail='.$id:
                    echo 'Client Management';
                    break;
                case '/client/drop':
                    echo 'Client Access Control';
                    break;
                case '/client/billing':
                    echo 'Billing Management';
                    break;
                case '/queue':
                    echo 'Queue List';
                    break;
                case '/report':
                     echo 'Report';
                    break;
                case '/client/billing?bill='.$id:
                    echo 'Billing Management';
                    break;
                case '/graph/console?detailGraph='.$id:
                    echo 'Graphing';
                    break;
                case '/graph/console?showGraph='.$id.'&rra_id='.$id_rra:
                    echo 'Graphing';
                    break;
                case '/users':
                    echo 'User Management';
                    break;
                case '/graph/interface':
                    echo 'Graphing';
                    break;
                case '/graph/client':
                    echo 'Graphing';
                    break;
                case '/graph/console':
                    echo 'Graphing';
                    break;
                case '/users?add':
                    echo 'User Management';
                    break;
                case '/users?edit='.$id:
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
                <img class="img-profile rounded-circle" src="/assets/profile/<?php echo $r['pic'];?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
