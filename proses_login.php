<?php
	include 'koneksi.php';
	session_start();

	if (!empty($_POST['login'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$query = "SELECT * FROM tbl_login Where username='$user' And password='$pass'";

		$sql_login = mysqli_query($connect, $query);

		$data_login = mysqli_fetch_array($sql_login);
		$jumlahdata = mysqli_num_rows($sql_login);

		if($jumlahdata >= 1) {
			if($data_login['hak_akses']=="Admin"){
						?>
				<script type="text/javascript">
					alert('masuk sebagai administrator');
					setTimeout("location.href='homeadmin.php'", 1000);
				</script>
				<?php
				$_SESSION['username']=$data_login['username'];
				$_SESSION['password']=$data_login['password'];
			}elseif ($data_login['hak_akses']=="User2") {
					?>
				<script type="text/javascript">
					alert('masuk sebagai manajemen');
					setTimeout("location.href='homeuser2.php'", 1000);
				</script>
				<?php
				$_SESSION['username']=$data_login['username'];
				$_SESSION['password']=$data_login['password'];
			}elseif($data_login['hak_akses']=="User") {
					?>
				<script type="text/javascript">
					alert('masuk sebagai customer, Jika Anda ingin memesan produk kami langsung saja klik "Ayo Pesan" !');
					setTimeout("location.href='homeuser.php'", 1000);
				</script>
				<?php
				$_SESSION['username']=$data_login['username'];
				$_SESSION['password']=$data_login['password'];
			}
			
		} else {
			?>
			<script type="text/javascript">
				alert('gagal masuk');
				setTimeout("location.href='login.php'", 1000);
			</script>
			<?php
		}
	}
?>
