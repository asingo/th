<?php
include 'config/dbconn.php';
$q = mysqli_query($conn,"select * from routeros");
$q2 = mysqli_query($conn,"select * from client");
$r2 = mysqli_fetch_array($q2);
$r = mysqli_fetch_array($q);
function singkatangka($n, $presisi=1) {
	if ($n < 900) {
		$format_angka = number_format($n, $presisi);
		$simbol = '';
	} else if ($n < 900000) {
		$format_angka = number_format($n / 1000, $presisi);
		$simbol = 'K';
	} else if ($n < 900000000) {
		$format_angka = number_format($n / 1000000, $presisi);
		$simbol = 'M';
	} 
 
	if ( $presisi > 0 ) {
		$pisah = '.' . str_repeat( '0', $presisi );
		$format_angka = str_replace( $pisah, '', $format_angka );
	}
	
	return $format_angka . $simbol;
}
$host = $r['host'];
$user = $r['user'];
$pass = $r['pass'];
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
// Create "where" Query object for RouterOS
$qmangle =
    (new Query('/queue/tree/print'))
            ->where('packet-mark','Indra Home-Down');
// Send query and read response from RouterOS
$response = $client->query($qmangle)->read();
foreach($response as $value){
    echo $value['packet-mark'].''.singkatangka($value['limit-at']).''.singkatangka($value['max-limit']);
}
?>