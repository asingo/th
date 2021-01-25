<?php
include 'config/dbconn.php';
$id = $_POST['id'];
$price = $_POST['price'];
$billing_date = $_POST['tgl_bayar'];

//echo $id . " " . $price . " " . $billing_date;

mysqli_query($conn,"update client_billing set price='$price', billing_date='$billing_date' where id='$id'");
header('location:/client/billing');
exit();
?>