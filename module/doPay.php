<?php
include 'config/dbconn.php';

$id = $_GET['pay'];
$date = date('Y-m-d');

mysqli_query($conn,"update client_billing set payment_done='$date' where id='$id'");
header('location:/client/billing');
exit();
?>