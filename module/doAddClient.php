<?php 
require_once 'vendor/autoload.php';
include 'config/dbconn.php';
$clientname = $_POST['username'];
$address = $_POST['address'];
$pm = $_POST['textFieldValue'];
$phone = $_POST['phone'];
$date= $_POST['tgl_awal'];
$paket = $_POST['paket'];
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
    $ip = $val['dst-address'];
}
// Create "where" Query object for RouterOS
$qqueue =
    (new Query('/queue/tree/print'))
            ->where('packet-mark',$pm);
// Send query and read response from RouterOS
$response = $client->query($qqueue)->read();
foreach($response as $value){
    $limit_at = $value['limit-at'];
    $max_limit = $value['max-limit'];
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//sql query for creating new data
$qadd = mysqli_query($conn,"insert into client(name,packetmark,address,phone,ip,package,payment_due) VALUES('$clientname','$pm','$address','$phone','$ip','$paket','$date')");
mysqli_query($conn,"set @last_id_table = last_insert_id()");
mysqli_query($conn,"insert into client_status(status,id_client) values(TRUE,@last_id_table)");
mysqli_query($conn,"insert into graph(id_client,graph_id) values(@last_id_table, null)");
mysqli_query($conn,"insert into client_billing(id_client,price,billing_date,payment_done) VALUES (@last_id_table, null, null,null)");
mysqli_query($conn,"insert into client_queue(id_client,limit_at,max_limit) values(@last_id_table,'$limit_at','$max_limit')");
header("location:/client/manage");
exit();
?>
