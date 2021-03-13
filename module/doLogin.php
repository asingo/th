<?php 
$username   = $_POST['username'];
$pass       = md5($_POST['password']);

include 'config/dbconn.php';

$user = mysqli_query($conn,"select * from users where user='$username' and pass='$pass'");
$cek = mysqli_num_rows($user);
 
if($cek > 0){
	$data = mysqli_fetch_assoc($user);

	if($data['rule']=="Administrator"){
		$_SESSION['username'] = $username;
		$_SESSION['rule'] = "Administrator";
		$_SESSION['status'] = TRUE;
		header("location:/");
	}else if($data['rule']=="Billing"){
		$_SESSION['username'] = $username;
		$_SESSION['rule'] = "Billing";
		$_SESSION['status'] = TRUE;
		header("location:/");	
	}
}
else{
	echo "<script>
alert('Username and/or Password Wrong!');
window.location.href='/';
</script>";
}
 
?>