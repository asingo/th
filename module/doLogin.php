<?php 
$username   = $_POST['username'];
$pass       = md5($_POST['password']);

include 'config/dbconn.php';

$user = mysqli_query($conn,"select * from users where user='$username' and pass='$pass'");
$cek = mysqli_num_rows($user);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = TRUE;
	header("location:/");
}else{
	
}
 
?>