<?php
include 'config/dbconn.php';
$id = $_GET['disable'];
mysqli_query($conn,"update client_status set status=0 where id_client='$id'");
$q = mysqli_query($conn,"select * from routeros");
$q2 = mysqli_query($conn,"select * from client where id='$id'");
$r = mysqli_fetch_array($q);
$r2 = mysqli_fetch_array($q2);
$host = $r['host'];
$user = $r['user'];
$pass = $r['pass'];
// API Remove
require_once 'vendor/autoload.php';
error_reporting(E_ALL);
use \RouterOS\Config;
use \RouterOS\Client;
use \RouterOS\Query;
// Initiate client with config object
$client = new Client([
    'host' => $host,
    'user' => $user,
    'pass' => $pass,
]);

// Send "equal" query with details about IP address which should be created
$query =
    (new Query('/ip/firewall/filter/add'))
        ->equal('action', 'drop')
        ->equal('chain', 'forward')
        ->equal('src-address', $r2['ip'])
        ->equal('comment', $r2['name']);

// Send query and read response from RouterOS (ordinary answer from update/create/delete queries has empty body)
$response = $client->query($query)->read();
//for debugging purposes only
//var_dump($response);
header('location:/client/drop');
exit();
?>