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
                <h6 class="m-0 font-weight-bold text-primary">Show Client Graph</h6>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-lg-7 card-body" id="printArea">
<?php 
$graphid = $_GET['showGraph'];
$rra_id = $_GET['rra_id'];
$q = mysqli_query($conn,"select * from graph inner join client on graph.id_client=client.id where graph.id='$id'");
$row = mysqli_fetch_array($q);
?>
    <div class="form-group" >
    <label for="username">Client Name</label>
    <input type="text" style="width:455px;" name="username" class="form-control" id="username" disabled value="<?php echo $row['name'];?>">
    </div>
  <div class="form-group">
    <label for="graph_id">Graph ID</label>
    <br>
    <img src="http://192.168.168.58/cacti/graph_image.php?local_graph_id=<?php echo $row['graph_id'];?>&rra_id=<?php echo $rra_id;?>&graph_width=455&graph_height=180&graph_nolegend=" >
  </div>
  <button onclick="printGraph('printArea')" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
  <a href="/graph/client"><button class="btn" type="button"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>

                </div>
                
                </div>
                </div>
            </div>
              <!-- Color System -->
      <script>
      function printGraph(itemName){
        var print = document.getElementById(itemName).innerHTML;
        var original = document.body.innerHTML;

        document.body.innerHTML = print;
        window.print();
        document.body.innerHTML = original;
      }
      </script>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'pages/_partials/footer.php';?>