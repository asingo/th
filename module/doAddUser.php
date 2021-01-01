<?php 
include 'config/dbconn.php';

$nama = $_POST['username'];
$pass = md5($_POST['password']);
$fname = $_POST['fullname'];
$rule = $_POST['rule'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$tmp = $_FILES['gambar']['tmp_name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	echo "Extensi Error";
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
        move_uploaded_file($tmp, '/home/popo/th/assets/profile/'.$rand.'_'.$filename);
        mysqli_query($conn, "insert into users(fname,user,pass,pic,rule) VALUES('$fname','$nama','$pass','$xx','$rule')");
        header("location:/users");
        exit();
    }
    else{
		echo "Kebesaran";
	}
}
header("location:/");
?>
