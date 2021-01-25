<?php
    include 'pages/_partials/sidebar.php';
    include 'pages/_partials/navbar.php';
    include 'config/dbconn.php';
    $query = mysqli_query($conn,"select * from client inner join client_status on client.id=client_status.id_client");
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Manage Client </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Status</th>
            <th>Packet Mark</th>
            <th>IP</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          //
          

        
          while ($r = mysqli_fetch_array($query)){
            if($r['status']){
              $button = '<button class="btn btn-success">Allowed</button>';
            }else {
              $button = '<button class="btn btn-danger">Disabled</button>';
          }
            echo '<tr>
            <td style="height: 40px; vertical-align: middle;">'.$r['id'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$r['name'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$button.'</td>
            <td style="height: 40px; vertical-align: middle;">'.$r['packetmark'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$r['ip'].'</td>
            <td style="height: 40px; width: 180px; vertical-align: middle;">
            <div align="center" data-button-type="client">
                <a href="drop?enable='.$r['id'].'"><button class="btn btn-success" type="button" title="Edit" aria-label="Edit"><i class="fa fa-check" aria-hidden="true"></i></button></a>
                <a href="drop?disable='.$r['id'].'" class="trash" data-id='.$r['id'].'  id="deleteUser" ><button class="btn btn-danger" type="button" title="Delete" aria-label="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a>
            </div>
            </td>
          </tr>';
          }
        ?>
        </tbody>
      </table>
  </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php
    include 'pages/_partials/footer.php';
?>