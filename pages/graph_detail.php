<?php
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
include 'config/dbconn.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Graph Client</h6>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-lg-7 card-body">
<?php 
  $id_client = $_GET['detailGraph'];
  $query_show = mysqli_query($conn,"select * from graph inner join client on graph.id_client=client.id where graph.id='$id_client'");
  $row = mysqli_fetch_array($query_show);
?>
  <form method="post" enctype="multipart/form-data" action="?doupdategraph">
    <div class="form-group">
    <label for="username">Client Name</label>
    <input type="text" name="username" class="form-control" id="username" disabled value="<?php echo $row['name'];?>">
    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $id_client;?>">
  </div>
  <div class="form-group">
    <label for="graph_id">Graph ID</label>
    <input type="text" class="form-control" id="graph_id" name="graph_id" value="<?php echo $row['graph_id'];?>">
    <small>Lihat pada console Cacti untuk mengetahui Graph ID</small>
  </div>
  <button type="submit" name="save" id="save" class="btn btn-primary">Update</button>
  <a href="/graph/console"><button class="btn" type="button"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>
</form>
                </div>
                
                </div>
                </div>
            </div>
              <!-- Color System -->


            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'pages/_partials/footer.php';?>