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
                <h6 class="m-0 font-weight-bold text-primary">Detail Billing Client</h6>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-lg-7 card-body">
<?php 
  $id_client = $_GET['bill'];
  $query_show = mysqli_query($conn,"select * from client_billing inner join client on client_billing.id_client=client.id where client_billing.id='$id_client'");
  $row = mysqli_fetch_array($query_show);
?>
<script type="text/javascript">
                
                $(function(){
                 $(".datepicker").datepicker({
                     format: 'yyyy-mm-dd',
                     autoclose: true,
                     todayHighlight: true,
                 });
                });
               </script>
  <form method="post" enctype="multipart/form-data" action="?doupdatebill">
    <div class="form-group">
    <label for="username">Client Name</label>
    <input type="text" name="username" class="form-control" id="username" disabled value="<?php echo $row['name'];?>">
    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $id_client;?>">
  </div>
  <div class="form-group">
    <label for="paket">Package</label>
    <input type="text" class="form-control" id="paket" name="paket" value="<?php echo $row['package'];?>">
  </div>
  <div class="form-group date">
    <label for="date">Installation Date</label>
    <div class="input-group">
      <input placeholder="Masukkan tanggal Pemasangan" disabled type="text" class="form-control datepicker" name="tgl_awal" value="<?php echo $row['payment_due'];?>">
      <div class="input-group-append">
        <i class="btn btn-primary fa fa-calendar"></i>
      </div>
    </div>
  </div>
  <div class="form-group date">
    <label for="date">Billing Date</label>
    <div class="input-group">
      <input placeholder="Masukkan tanggal Penagihan" type="text" class="form-control datepicker" name="tgl_bayar" value="<?php echo $row['billing_date'];?>">
      <div class="input-group-append">
        <i class="btn btn-primary fa fa-calendar"></i>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="paket">Price</label>
    <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price'];?>">
  </div>
  <button type="submit" name="save" id="save" class="btn btn-primary">Update</button>
  <a href="/client/billing"><button class="btn" type="button"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>
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