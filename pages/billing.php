<?php 
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <?php
include 'config/dbconn.php';
$query = mysqli_query($conn,"select * from client inner join client_billing on client.id=client_billing.id_client");
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Manage Client Billing</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Install Date</th>
            <th>Billing Date</th>
            <th>Payment Done</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          while ($row = mysqli_fetch_array($query)){
            echo '<tr>
            <td style="height: 40px; vertical-align: middle;">'.$row['id'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['name'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['payment_due'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['billing_date'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['payment_done'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.'Rp. '.number_format($row['price'],2,',','.').'</td>
            <td style="height: 40px; width: 180px; vertical-align: middle;">
            <div align="center" data-button-type="client">
                <a href="billing?bill='.$row['id'].'"><button class="btn btn-primary" type="button" title="Detail" placeholder="Detail" aria-label="Detail"><i class="fa fa-bars" aria-hidden="true"></i></button></a>
                <a href="billing?pay='.$row['id'].'"><button class="btn btn-success" type="button" title="Pay" placeholder="Pay" aria-label="Pay"><i class="fa fa-check" aria-hidden="true"></i></button></a>
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
<?php include 'pages/_partials/footer.php';?>