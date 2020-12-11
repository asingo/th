<?php 
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-8 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Connected Server</h6>
                </div>
                <div class="card-body">
                <h4 style="color: #000000;">Server Hostname / IP</h4>
                <h5>127.0.0.1</h5>
                <h4 style="color: #000000;">Username</h4>
                <h5>admin</h5>
                <h4 style="color: #000000;">Status</h4>
                <h5 class="square">Connected</h5>

                </div>
              </div>

              <!-- Color System -->
              

            </div>

            <div class="col-lg-4 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Change Connected Server</h6>
                </div>
                <div class="card-body">
                  <form action="login/" method="POST" onSubmit="return validasi()" class="user">
                    <div class="form-group">
                      <input type="text" name="ip" class="form-control" id="ip" aria-describedby="ip" placeholder="Enter Hostname here">
                    </div>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" id="username" placeholder="Enter Router Credentials">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button></div>
                  </form>

                </div>

              <!-- Approach -->
              

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'pages/_partials/footer.php';?>