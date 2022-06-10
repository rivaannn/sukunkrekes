<?php

	include("koneksi.php");

	// cek apakah tombol daftar sudah dikilik atau belum
	if(isset($_POST['simpan'])){

		// ambil data dari formulir
		$email = $_POST['email'];
		$nama = $_POST['nama'];
		$pilihan_rasa = $_POST['pilihan_rasa'];
		$ongkir = $_POST['ongkir'];
		$alamat = $_POST['alamat'];
		$metode_pembayaran = $_POST['metode_pembayaran'];

		// buat query
		$sql = "INSERT INTO tbl_pembayaran (email, nama, pilihan_rasa, ongkir, alamat, metode_pembayaran) Values ('$email', '$nama', '$pilihan_rasa', '$ongkir', '$alamat', '$metode_pembayaran')";
		$query = mysqli_query($connect, $sql);

		// apakah query simpan berhasil?
		if($query) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('location: list_pembayaran.php');
		} else {
			// kalau gagal alihkan ke halaman index.php dengan status=gagal
			header('location: list_pembayaran.php');
		}
		

	} else {
		die("akses dilarang...");
	}

?>
