<?php 
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
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
                <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-lg-7 card-body">
                <form method="post" enctype="multipart/form-data" action=doAddUser.php>
    <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jjjj">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fullname</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label>Upload Photo</label>
    <input type="file" class="form-control" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/users"><button class="btn"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>
</form>

                </div>
                <div class="col-lg-4 card-body">
                Foto Profil
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