<?php 
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <?php
include 'config/dbconn.php';
$query = mysqli_query($conn,"select * from client");
?>
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
            <th>Phone</th>
            <th>Packet Mark</th>
            <th>IP</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          while ($row = mysqli_fetch_array($query)){
            echo '<tr>
            <td style="height: 40px; vertical-align: middle;">'.$row['id'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['name'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['phone'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['packetmark'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['ip'].'</td>
            <td style="height: 40px; width: 180px; vertical-align: middle;">
            <div align="center" data-button-type="client">
                <a href="manage?detail='.$row['id'].'"><button class="btn btn-primary" type="button" title="Edit" aria-label="Edit"><i class="fa fa-bars" aria-hidden="true"></i></button></a>
                <a href="javascript:;" data-button-type="client" class="trash" data-id='.$row['id'].' data-toggle="modal" id="deleteUser" data-target="#deleteModal"><button class="btn btn-danger" type="button" title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
            </div>
            </td>
          </tr>';
          }
        ?>
          
        </tbody>
      </table>
      <a href="/client/manage?addclient" ><button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add Client</button></a>
  </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php include 'pages/_partials/footer.php';?>