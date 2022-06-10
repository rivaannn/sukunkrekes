<?php
	$server="localhost";
	$user="root";
	$pass="";
	$db="db_sukun";

	$connect=mysqli_connect($server, $user, $pass, $db);

	if($connect){

	}else{
		echo "Koneksi tidak terhubung <br>";
	}
?>