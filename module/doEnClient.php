<?php
include 'config/dbconn.php';
$id = $_GET['enable'];
mysqli_query($conn,"update client_status set status=1 where id_client='$id'");
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
    (new Query('/ip/firewall/filter/getall'))
        ->where('src-address', $r2['ip']);
// Send query and read response from RouterOS (ordinary answer from update/create/delete queries has empty body)
$response = $client->query($query)->read();
foreach($response as $val){
    $id = $val['.id'];
}

$q2 = (new Query('/ip/firewall/filter/remove'))
        ->equal('.id',$id);
$response2 = $client->query($q2)->read();

// var_dump($response);
// var_dump($response2);
header('location:/client/drop');
exit();
?>