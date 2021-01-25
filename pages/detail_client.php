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
                <h6 class="m-0 font-weight-bold text-primary">Detail Client</h6>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-lg-7 card-body">
<?php 
  $id_client = $_GET['detail'];
  $query_show = mysqli_query($conn,"select * from client inner join client_billing on client.id=client_billing.id_client where client.id='$id_client'");
  $row = mysqli_fetch_array($query_show);
?>
  <form method="post" enctype="multipart/form-data" action="?doupdateclient">
    <div class="form-group">
    <label for="username">Client Name</label>
    <input type="text" name="username" class="form-control" id="username" value="<?php echo $row['name'];?>">
    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $id_client;?>">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'];?>">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone'];?>">
  </div>
  <div class="form-group">
    <label for="paket">Package</label>
    <input type="text" class="form-control" id="paket" name="paket" value="<?php echo $row['package'];?>">
    <div class="d-inline"><small>Ketik jenis langganan. Mis: "2mbps personal / 4mbps soho"</small></div>
  </div>
  <div class="form-group date">
    <label for="date">Installation Date</label>
    <div class="input-group">
      <input placeholder="Masukkan tanggal Pemasangan" disabled type="text" class="form-control datepicker" name="tgl_awal" value="<?php echo $row['payment_due'];?>">
      <div class="input-group-append">
        <i class="btn btn-primary fa fa-calendar"></i>
      <div>
    </div>
  </div>
  <div class="form-group">
    <label for="rule">Packet Mark</label>
    <select disabled class="form-control" name="packet-mark" id="packet-mark" onchange="selectPM()">
      <option disabled selected><?php echo $row['packetmark'];?></option>

   <option value="<?=$value['new-packet-mark']?>"><?=$value['new-packet-mark']?></option> 

    </select>
    <input type="hidden" name="textFieldValue" id="textFieldValue">
    <div class="d-inline"><small>Pilih Download Packet Mark</small></div>
    </div>
  <button type="submit" name="save" id="save" class="btn btn-primary">Update</button>
  <a href="/client/manage"><button class="btn" type="button"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>
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