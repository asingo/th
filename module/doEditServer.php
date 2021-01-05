<?php
include 'config/dbconn.php';

$ip = $_POST['ip'];
$user = $_POST['username'];
$pass = $_POST['password'];

mysqli_query($conn, "update routeros set host='$ip',user='$user',pass='$pass'");
header('location:/server');
exit();
?>