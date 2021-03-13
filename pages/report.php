<?php
    include 'pages/_partials/sidebar.php';
    include 'pages/_partials/navbar.php';
    include 'config/dbconn.php';
    $query = mysqli_query($conn,"select * from client inner join client_status on client.id=client_status.id_client");
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Generate Report</h6>
  </div>
  <div class="card-body">
<script>
function validateForm(form) {
    var a = document.forms["Form"]["month"].value;
    var b = document.forms["Form"]["year"].value;
    if (a == null || a == "", b == null || b == "") {
      alert("Pilih Bulan dan/atau Tahun!");
      return false;
    }
    else{
      target_popup(form);
    }
  }
</script>
<form method="POST" id="Form" name="Form" onsubmit="return validateForm(this);" action="?doPrint">
<div class="container">
  <div class="row justify-content-start">
    <div class="col-4">
    <?php
$MonthArray = array(
"1" => "January", "2" => "February", "3" => "March", "4" => "April",
"5" => "May", "6" => "June", "7" => "July", "8" => "August",
"9" => "September", "10" => "October", "11" => "November", "12" => "December",
);
?>
<select class="form-control" id="a" name="month">
<option selected value="" disabled>Select Month</option>
<?php
foreach ($MonthArray as $monthNum=>$month) {
$selected = (isset($getMonth) && $getMonth == $monthNum) ? 'selected' : '';
//Uncomment line below if you want to prefix the month number with leading 0 'Zero'
//$monthNum = str_pad($monthNum, 2, "0", STR_PAD_LEFT);
echo '<option ' . $selected . ' value="' . $monthNum . '">' . $month . '</option>';
}
?>
</select>
    </div>
    <div class="col-4">
    <select class="form-control" name="year" id="b">
<option selected value="" disabled>Select Year</option>
<?php
for ($year = 2018; $year <= 2030; $year++) {
$selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
echo "<option value=$year $selected>$year</option>";
}
?>
</select>
    </div>
    <button class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
  </div>
  
</div>


</form>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php
    include 'pages/_partials/footer.php';
?>