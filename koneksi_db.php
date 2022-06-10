<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_sukun";
	$conn = mysqli_connect($host, $user, $pass, $db);
	if(!$conn){
		die("error in connection");
	}
?>