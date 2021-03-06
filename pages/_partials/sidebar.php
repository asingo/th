<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="node_modules/js-cookie/src/js.cookie.js"></script>
  <title>Cosmicwave Monitoring</title>
  
  <!-- Custom fonts for this template-->
  <link href="https://cdn.jsdelivr.net/gh/asingo/th/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/gh/asingo/th/assets/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="https://cdn.jsdelivr.net/gh/asingo/th/assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/gh/asingo/th/assets/css/custom.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script>
function target_popup(form) {
    window.open('', 'formpopup', 'width=1268,height=1400,resizeable,scrollbars');
    form.target = 'formpopup';
}
  </script>
</head>
<?php 
if($_SESSION['rule']=='Billing'){
  $hidden = 'hidden';
}else{
  $hidden = '';
}
?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-text mx-3"><img src="https://cdn.jsdelivr.net/gh/asingo/th/assets/img/logocw.png"></div>       
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>--><!-- 
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manage
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-fw fa-chart-bar " aria-hidden="true"></i>
          <span>Graph</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Select Graph</h6>
            <a class="collapse-item" href="/graph/interface">Interface</a>
            <a class="collapse-item" href="/graph/client">Client/IP Address</a>
            <a class="collapse-item" href="/graph/console" <?php echo $hidden;?>>Console</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/queue">
          <i class="fas fa-fw fa-chart-pie"></i>
          <span>Queue</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Billing
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fa fa-fw fa-users " aria-hidden="true"></i>
          <span>Client Manage</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Select Options</h6>
            <a class="collapse-item" href="/client/manage">Manage Client</a>
            <a class="collapse-item" href="/client/drop" <?php echo $hidden;?>>Drop Client</a>
            <a class="collapse-item" href="/client/billing">Billing Manage</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/report">
          <i class="fas fa-fw fa-tasks"></i>
          <span>Report</span></a>
      </li>
      <hr class="sidebar-divider" <?php echo $hidden;?>>
      <!-- Heading -->
      <div class="sidebar-heading" <?php echo $hidden;?>>
        Settings
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item" <?php echo $hidden;?>>
        <a class="nav-link" href="/server">
          <i class="fas fa-fw fa-server"></i>
          <span>Server</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item" <?php echo $hidden;?>>
        <a class="nav-link" href="/users">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" <?php echo $hidden;?>>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->