<?php
include 'config/dbconn.php';
$clientname = $_POST['username'];
$id = $_POST['id'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$paket = $_POST['paket'];

mysqli_query($conn,"update client set name='$clientname', address='$address', phone='$phone', package='$paket' where id='$id'");

header('location:/client/manage');
exit();
?>