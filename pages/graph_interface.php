<?php
    include 'pages/_partials/sidebar.php';
    include 'pages/_partials/navbar.php';

?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Interface Graph</h6>
  </div>
  <div class="card-body">
    <!--Graph-->
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="http://192.168.168.58/cacti/graph_image.php?local_graph_id=24&rra_id=1&graph_width=373&graph_height=178&graph_nolegend=" allowfullscreen></iframe>
        </div>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="http://192.168.168.58/cacti/graph_image.php?local_graph_id=23&rra_id=1&graph_width=373&graph_height=178&graph_nolegend=" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- <div class="col-sm-6" style="padding-top:24px;">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Add Graph Here !</h5>
        <a href="#" class="btn btn-primary">Add</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="padding-top:24px;">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Add Graph Here !</h5>
        <a href="#" class="btn btn-primary">Add</a>
      </div>
    </div>
  </div> -->
</div>
    <!--End Graph-->
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include 'pages/_partials/footer.php';?>