<?php 
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <?php
include 'config/dbconn.php';
$query = mysqli_query($conn,"select * from users");
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Manage User Authorization</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>User ID</th>
            <th>Role</th>
            <th>Picture</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
          while ($row = mysqli_fetch_array($query)){
            echo '<tr>
            <td style="height: 40px; vertical-align: middle;">'.$row['no'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['fname'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['user'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['rule'].'</td>
            <td style="height: 40px; vertical-align: middle;">'.$row['pic'].'</td>
            <td style="height: 40px; width: 180px; vertical-align: middle;">
            <div align="center" data-button-type="user">
                <a href="users?edit='.$row['no'].'"><button class="btn btn-primary" type="button" title="Edit" aria-label="Edit"><i class="fa fa-wrench" aria-hidden="true"></i></button></a>
                <a href="javascript:;" data-button-type="user" class="trash" data-id='.$row['no'].' data-toggle="modal" id="deleteUser" data-target="#deleteModal"><button class="btn btn-danger" type="button" title="Delete" aria-label="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
            </div>
            </td>
          </tr>';
          }
        ?>
          
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