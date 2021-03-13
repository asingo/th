<?php
include 'config/dbconn.php';
$id = $_POST['id'];
$graph_id = $_POST['graph_id'];

mysqli_query($conn,"update graph set graph_id='$graph_id' where id='$id'");
header('location:/graph/console');
exit();
?>