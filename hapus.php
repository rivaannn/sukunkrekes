<?php

	include("koneksi.php");

	if( isset($_GET['email']) ){

		// ambil id dari query string
		$email = $_GET['email'];

		// buat query hapus
		$sql = "DELETE FROM tbl_pembayaran WHERE email = '$email'";
		$query = mysqli_query($connect, $sql);

		// apakah query hapus berhasil?
		if( $query ){
			header('Location: list_pembayaran.php');
		} else {
			die("gagal menghapus...");
		}
	} else {
		die("akses dilarang...");
	}

?>