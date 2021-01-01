<?php 
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
<script> 
function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
        

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
                <form method="post" enctype="multipart/form-data" action="?doAdd">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" id="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="fullname">Fullname</label>
    <input type="text" class="form-control" id="fullname" name="fullname">
  </div>
  <div class="form-group">
    <label for="rule">Rule</label>
    <select class="form-control" id="rule" name="rule">
      <option>--Select Rule--</option>
      <option value="Administrator">Administrator</option>
      <option value="Billing">Billing</option>
    </select>
  </div>
  <div class="form-group">
    <label>Upload Photo</label>
    <input id="image-source" onChange="previewImage();" type="file" class="form-control" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/users"><button class="btn"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>
</form>

                </div>
                <div class="col-lg-4 card-body">
                Foto Profil
                <br>
                <img src="https://img2.pngio.com/person-vector-png-full-body-person-icon-clip-art-library-people-vector-png-920_1415.png"  id="image-preview" style="padding-left: 25px; padding-top: 10px; width: 50%; height: auto;">
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