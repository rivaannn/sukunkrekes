<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>

 <header>
  <h3>List Pembayaran</h3>
</header>

  <nav>
    <a href="form_pembayaran.php">[+] tambah baru</a>
  </nav>

  <br>

  <table border="1">
  <thead>
    <tr>
      <th> Email </th>
      <th> Nama </th>
      <th> Pilihan Rasa </th>
      <th> Ongkir </th>
      <th> Alamat </th>
      <th> Metode Pembayaran </th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql = "SELECT * FROM tbl_pembayaran";
    $query = mysqli_query($connect, $sql);

    while($pembayaran = mysqli_fetch_array($query)){
      echo "<tr>";

      echo "<td>".$pembayaran['email']."</td>";
      echo "<td>".$pembayaran['nama']."</td>";
      echo "<td>".$pembayaran['pilihan_rasa']."</td>";
      echo "<td>".$pembayaran['ongkir']."</td>";
      echo "<td>".$pembayaran['alamat']."</td>";
      echo "<td>".$pembayaran['metode_pembayaran']."</td>";
      echo "</td>";

      echo "</tr>";
    }
    ?>

  </tbody>
  </table>

  <p>Total: <?php echo mysqli_num_rows($query) ?></p>
  <a href="homeuser.php">Kembali</a>
</body>
</html>