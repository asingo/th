<?php
include 'config/dbconn.php';

$id = $_GET['delUser'];

mysqli_query($conn,"delete from users where no='$id'");

header('location:/users');

exit();
?>
