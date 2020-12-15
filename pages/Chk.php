<?php
include '../config/dbconn.php';
$query = mysqli_query($conn,"select * from users");
while ($row = mysqli_fetch_array($query)){
    echo $row['fname'];
}
?>