<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['simpan'])){

	// ambil data dari formulir
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$pilihan_rasa = $_POST['pilihan_rasa'];
	$ongkir = $_POST['ongkir'];
	$alamat = $_POST['alamat'];

	// buat query update
	$sql = "UPDATE tbl_pembayaran SET nama='$nama', pilihan_rasa='$pilihan_rasa', ongkir='$ongkir', alamat='$alamat' WHERE email='$email'";
	$query = mysqli_query($connect, $sql);

	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header("location: list_pembayaran.php");
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
} else {
	die("Akses dilarang...");
}

?>