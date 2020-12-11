<?php 
$username   = "admin";
$pass       = md5("admin");

include '../config/dbconn.php';

$user = mysqli_query($conn,"select * from users where user='$username' and pass='$pass'");
$chek = mysqli_num_rows($user);
echo $chek;
?>