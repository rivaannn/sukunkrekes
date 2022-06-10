<?php

	include("koneksi.php");

	if( ! isset($_GET[ 'email']) ){
			// kalau tidak ada id di query string
			header('Location: list_pelanggan.php');
	}

	// ambil id dari query string
	$pembayaran = $_GET['email'];

	// buat query untuk ambil data dari database
	$sql = "SELECT * FROM tbl_pembayaran WHERE email = '$pembayaran'";
	$query = mysqli_query($connect, $sql);
	$pembayaran = mysqli_fetch_assoc($query);

	// jika data yang di-edit tidak ditemukan
	if( mysqli_num_rows($query) < 1 ){
		die("data tidak ditemukan...");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Pembayaran</title>
</head>

<body>
<form action="proses_edit_pembayaran.php" method="POST">

		<fieldset>

			<input type="hidden" name="email" value="<?php echo $pembayaran['email'] ?>" />
		<p>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" placholder="nama" value="<?php echo $pembayaran['nama'] ?>"/>
		</p>
		<p>
			<label for="pilihan_rasa">Pilihan Rasa : </label>
					<select name = "pilihan_rasa">
						<option value="Original : Rp.10.000">Original : Rp.10.000</option>
						<option value="Balado : Rp.15.000">Balado : Rp.15.000</option>
						<option value="Keju : Rp.15.000">Keju : Rp.15.000</option>
						<option value="Extra Pedas : Rp.20.000">Extra Pedas : Rp.20.000</option>
						<option value="Rumput Laut : Rp.22.000">Rumput Laut : Rp.22.000</option>
						<option value="Jagung Bakar : Rp.18.000">Jagung Bakar : Rp.18.000</option>
					</select>
		</p>
		<p>
			<label for="ongkir">Ongkos Kirim : </label>
					<input type="checkbox" name="Luar Pulau : Rp.12.000"> Luar Pulau : Rp.12.000
					<input type="checkbox" name="Luar Kota : Rp.8.000"> Luar Kota : Rp.8.000
					<input type="checkbox" name="Dalam Kota : FREE"> Dalam Kota : FREE
					<span class="focus-input100"></span>
		</p>
		<p>
			<label for="alamat">Alamat : </label>
			<input type="text" name="alamat" placholder="alamat" value="<?php echo $pembayaran['alamat'] ?>"/>
		</p>
		<p>
			<label for="metode_pembayaran">Metode Pembayaran : </label>
					<input type="radio" name="metode_pembayaran" class="form-control" value="Bank">Bank
					<input type="radio" name="metode_pembayaran" class="form-control" value="COD">COD
					<input type="radio" name="metode_pembayaran" class="form-control" value="Kurir(JNE)">Kurir (JNE)
					<span class="focus-input100"></span>
		</p>
		<p>
			<input type="submit" value="simpan" name="simpan"/>
		</p>

		</fieldset>

	</form>

	</body>
</html>