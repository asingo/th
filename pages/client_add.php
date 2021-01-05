<?php
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
include 'config/dbconn.php';
$q = mysqli_query($conn,"select * from routeros");
$r = mysqli_fetch_array($q);
$host = $r['host'];
$user = $r['user'];
$pass = $r['pass'];
require_once 'vendor/autoload.php';
error_reporting(E_ALL);
use \RouterOS\Config;
use \RouterOS\Client;
use \RouterOS\Query;
// Initiate client with config object
$client = new Client([
    'host' => $host,
    'user' => $user,
    'pass' => $pass,
]);
// Create "where" Query object for RouterOS
$qmangle =
    (new Query('/ip/firewall/mangle/getall'));
// Send query and read response from RouterOS
$response = $client->query($qmangle)->read();
?>
<script>
function selectPM() {
        //Getting Value
        
        // METHOD 1
        var selValue = document.getElementById("packet-mark").value;
        
        //METHOD 2
        var selObj = document.getElementById("packet-mark");
        var selValue = selObj.options[selObj.selectedIndex].value;
        
        //Setting Value
        document.getElementById("textFieldValue").value = selValue;
    }
</script>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Client</h6>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-lg-7 card-body">
  <form method="post" enctype="multipart/form-data" action="?doaddclient">
    <div class="form-group">
    <label for="username">Client Name</label>
    <input type="text" name="username" class="form-control" id="username">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group">
    <label for="rule">Packet Mark</label>
    <select class="form-control" name="packet-mark" id="packet-mark" onchange="selectPM()">
      <option disabled selected>--Select Packet Mark--</option>
      <?php 
  foreach($response as $value){
 ?>
   <option value="<?=$value['new-packet-mark']?>"><?=$value['new-packet-mark']?></option> 
 <?php
  } 
 ?>
    </select>
    <input type="hidden" name="textFieldValue" id="textFieldValue">
    <div class="d-inline"><small>Pilih Download Packet Mark</small></div>
    </div>
  <button type="submit" name="save" id="save" class="btn btn-primary">Submit</button>
  <a href="/users"><button class="btn"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>
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