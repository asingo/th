<?php
    include 'pages/_partials/sidebar.php';
    include 'pages/_partials/navbar.php';
    include 'config/dbconn.php';
    $query = mysqli_query($conn,"select * from client inner join graph on client.id=graph.id_client");
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Manage Client </h6>
  </div>
  <div class="card-body" id="tablePrint">
    <div class="table-responsive" >
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>IP</th>
            <th>Show Graph</th>
          </tr>
        </thead>
        <tbody>
        <?php
          //
          

        
          while ($r = mysqli_fetch_array($query)){
            echo '<tr>
            <td style="height: 40px; vertical-align: middle;">'.$r['id'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$r['name'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$r['ip'].'</td>
            <td style="height: 40px; width: auto; vertical-align: middle;">
            <div align="center">
            <a href="client?showGraph='.$r['id'].'&rra_id=5"><button class="btn btn-primary" type="button" title="Edit" aria-label="Edit"><i class="fa fa-bars" aria-hidden="true"></i> Show Graph</button></a>
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