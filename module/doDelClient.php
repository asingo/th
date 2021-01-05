<?php
include 'config/dbconn.php';

$id = $_GET['delClient'];
echo $id;
mysqli_query($conn,"delete from client where id='$id'");

header('location:/client/manage');
exit();
?>
