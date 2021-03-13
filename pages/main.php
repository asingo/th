<?php 
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
include 'config/dbconn.php';
$q = mysqli_query($conn,"select * from client inner join client_status on client.id = client_status.id_client inner join client_queue on client.id = client_queue.id_client");
$qtrue = mysqli_query($conn,"select * from client inner join client_status on client.id = client_status.id_client inner join client_queue on client.id = client_queue.id_client where client_status.status = 1");
$qfalse = mysqli_query($conn,"select * from client inner join client_status on client.id = client_status.id_client inner join client_queue on client.id = client_queue.id_client where client_status.status = 0");
$totbw = mysqli_query($conn,"select sum(client_queue.max_limit) as total from client inner join client_status on client.id = client_status.id_client inner join client_queue on client.id = client_queue.id_client");
$count = mysqli_num_rows($q);
$true = mysqli_num_rows($qtrue);

$total = mysqli_fetch_array($totbw);
if (mysqli_num_rows($qfalse)==0){
  $false = 0;
}else if(mysqli_num_rows($qfalse)){
  $false = mysqli_num_rows($qfalse);
}
function singkatangka($n, $presisi=1) {
	if ($n < 900) {
		$format_angka = number_format($n, $presisi);
		$simbol = '';
	} else if ($n < 900000) {
		$format_angka = number_format($n / 1000, $presisi);
		$simbol = 'Kb';
	} else if ($n < 900000000) {
		$format_angka = number_format($n / 1000000, $presisi);
		$simbol = 'Mb';
	} 
 
	if ( $presisi > 0 ) {
		$pisah = '.' . str_repeat( '0', $presisi );
		$format_angka = str_replace( $pisah, '', $format_angka );
	}
	
	return $format_angka . $simbol;
}
?>
        <script>Cookies.set('name','Dashboard',{path:''});</script>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Client</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-id-card fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Client Up</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $true;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Client Down</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $false;?></div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-times fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Bandwidth</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo singkatangka($total['total']);?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Client All Traffic</h6>
  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <img src="http://192.168.168.58/cacti/graph_image.php?local_graph_id=24&rra_id=1&graph_width=900&graph_height=250&graph_nolegend=">
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
<?php include 'pages/_partials/footer.php';?>