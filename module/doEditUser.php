<?php 
include 'config/dbconn.php';
$id = $_POST['no'];
$nama = $_POST['username'];
$pass = md5($_POST['password']);
 
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
        mysqli_query($conn, "update users set user='$nama', pass='$pass',pic='$xx' where no=");
        header("location:/users");
        exit();
    }
    else{
		echo "Kebesaran";
	}
}
header("location:/");
?>
