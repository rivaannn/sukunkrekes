<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<h1>Halaman Pembayaran</h1>


  <hr>
  <h3>Form Pembayaran</h3>
  <form action="proses_daftar_pembayaran.php" method="POST">
    <fieldset>
    <p>
      <label for="email">Email : </label>
      <input type="text" name="email" placholder="email"/>
    </p>
    <p>
      <label for="nama">Nama  : </label>
      <input type="text" name="nama" placholder="nama"/>
    </p>
    <p>
      <label for="pilihan_rasa">Pilihan Rasa : </label>
      <select name ="pilihan_rasa">
        <option value="Original : Rp.10.000">Original : Rp.10.000</option>
        <option value="Balado : Rp.15.000">Balado : Rp.15.000</option>
        <option value="Keju : Rp.15.000">Keju : Rp.15.000</option>
        <option value="Extra Pedas : Rp.20.000">Extra Pedas : Rp.20.000</option>
        <option value="Rumput Laut : Rp.22.000">Rumput Laut : Rp.22.000</option>
        <option value="Jagung Bakar : Rp.18.000">Jagung Bakar : Rp.18.000</option>
      </select>
    </p>
    <p>
      <label for="ongkir">Ongkir : </label>
       <select name ="ongkir">
        <option value="Luar Pulau : Rp.12.000">Luar Pulau : Rp.12.000</option>
        <option value="Luar Kota : Rp.8.000">Luar Kota : Rp.8.000</option>
        <option value="Dalam Kota : FREE">Dalam Kota : FREE</option>
      </select>
    </p>
    <p>
      <label for="alamat">Alamat : </label>
      <input type="text" name="alamat" placholder="alamat"/>
    </p>
    <p>
      <label for="metode_pembayaran">Metode Pembayaran : </label>
      <select name ="metode_pembayaran">
        <option value="Bank">Bank</option>
        <option value="COD">COD</option>
        <option value="Kurir(JNE)">Kurir(JNE)</option>
      </select>
    </p>
    <p>
      <input type="submit" class="btn btn-info" value="Bayar Sekarang" name="simpan"/>
    </p>
    </fieldset>
  </form>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>