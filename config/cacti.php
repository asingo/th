<?php
$conn_cacti = mysqli_connect("127.0.0.1", "indra", "AKU9anteng!!", "cacti");

if (!$conn_cacti) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>