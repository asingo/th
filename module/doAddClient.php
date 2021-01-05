<?php 
require_once 'vendor/autoload.php';
include 'config/dbconn.php';
$clientname = $_POST['username'];
$address = $_POST['address'];
$pm = $_POST['textFieldValue'];
$phone = $_POST['phone'];
// query for user api
$q = mysqli_query($conn,"select * from routeros");
$r = mysqli_fetch_array($q);
$host = $r['host'];
$user = $r['user'];
$pass = $r['pass'];
//ip query from api

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
$qip = (new Query('/ip/firewall/mangle/print'))->where('new-packet-mark',$pm);
$resp = $client->query($qip)->read();
foreach ($resp as $val) {
    $ip=$val['dst-address'];
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//sql query for creating new data
$qadd = mysqli_query($conn,"insert into client(name,packetmark,address,phone,ip) VALUES('$clientname','$pm','$address','$phone','$ip')");
header("location:/client/manage");
exit();
?>
