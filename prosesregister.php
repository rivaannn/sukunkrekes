<?php

include("koneksi.php");

if(isset($_POST['Tambah'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$user = 'User';

	$sql = "INSERT INTO tbl_login (username, password, hak_akses) VALUES ('$username', '$password', '$user')";
	$query = mysqli_query($connect, $sql);

	if( $query ) {
		header('Location: login.php?status=sukses');
	} else {
		header('Location: login.php?status=gagal');
	}


} else {
	die("Akses Dilarang...");
}

?>