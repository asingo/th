<?php
    include 'pages/_partials/sidebar.php';
    include 'pages/_partials/navbar.php';
    include 'config/dbconn.php';
    $query = mysqli_query($conn,"select * from client inner join client_queue on client.id=client_queue.id_client");
function singkatangka($n, $presisi=1) {
	if ($n < 900) {
		$format_angka = number_format($n, $presisi);
		$simbol = '';
	} else if ($n < 900000) {
		$format_angka = number_format($n / 1000, $presisi);
		$simbol = 'K';
	} else if ($n < 900000000) {
		$format_angka = number_format($n / 1000000, $presisi);
		$simbol = 'M';
	} 
 
	if ( $presisi > 0 ) {
		$pisah = '.' . str_repeat( '0', $presisi );
		$format_angka = str_replace( $pisah, '', $format_angka );
	}
	
	return $format_angka . $simbol;
}
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Manage Queue </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Packet Mark</th>
            <th>Limit At</th>
            <th>Max Limit</th>
          </tr>
        </thead>
        <tbody>
        <?php
          //
          

        
          while ($r = mysqli_fetch_array($query)){
            echo '<tr>
            <td style="height: 40px; vertical-align: middle;">'.$r['id'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$r['name'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$r['packetmark'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.singkatangka($r['limit_at']).'</td>
            <td style="height: 40px; vertical-align: middle;">'.singkatangka($r['max_limit']).'</td>
            </tr>';
          }
        ?>
        </tbody>
      </table>
      <small>* Nilai di dapat langsung dari Queue Tree</small>
  </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php
    include 'pages/_partials/footer.php';
?>