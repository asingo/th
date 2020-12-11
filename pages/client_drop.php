<?php 
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage / Drop Client</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Allow / Disallow Client Connection</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>IP Address</th>
            <th>Packet Mark</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="height: 40px; vertical-align: middle;">1</td>
            <td style="height: 40px; vertical-align: middle;">Admin</td>
            <td style="height: 40px; vertical-align: middle;">11</td>
            <td style="height: 40px; vertical-align: middle;">asd</td>
            <td style="height: 40px; vertical-align: middle;">233</td>
            <td style="height: 40px; width: 180px; vertical-align: middle;">
            <div align="center">
                <a href="users?edit"><button class="btn btn-primary" type="button" title="Edit" aria-label="Edit"><i class="fa fa-wrench" aria-hidden="true"></i></button></a>
                <a href="#" data-toggle="modal" data-target="#deleteModal"><button class="btn btn-danger" type="button" title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
</div>
            </td>
          </tr>
        </tbody>
      </table>
      <a href="users?add" ><button class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add User</button></a>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'pages/_partials/footer.php';?>