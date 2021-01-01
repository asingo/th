<?php 
include 'pages/_partials/sidebar.php';
include 'pages/_partials/navbar.php';
include '../config/dbconn.php';
$userget = $_GET['edit'];
$query = mysqli_query($conn,"select * from users where no='$userget'");
$row = mysqli_fetch_array($query);
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
                <h6 class="m-0 font-weight-bold text-primary">Edit User -- <?php echo $row['fname'];?></h6>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-lg-7 card-body">
          <form method="post" enctype="multipart/form-data" action="?doEdit">
    <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="hidden" class="form-control" id="no" name="no" placeholder="<?php echo $row['user'];?>">
    <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo $row['user'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password">
  </div>
  <div class="form-group">
    <label>Upload Photo</label>
    <input id="image-source" onChange="previewImage();" type="file" class="form-control" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/users"><button type="button" class="btn"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>
  </form>
  

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

                </div>
                <div class="col-lg-4 card-body">
                Foto Profil
                <br>
                <img src="assets/profile/<?php echo $row['pic'];?>"  id="image-preview" style="padding-left: 25px; padding-top: 10px; width: 50%; height: auto;">
                </div>
                </div>
                </div>
            </div>
              <!-- Color System -->
              

            </div>

            <div class="col-lg-4 mb-4">

              <!-- Illustrations -->
              

              <!-- Approach -->
              

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'pages/_partials/footer.php';?>