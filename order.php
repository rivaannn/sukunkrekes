<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
require 'koneksi.php';
$sql = 'SELECT * FROM product';
$result = mysqli_query($connect, $sql);
 ?>
<h2> Pilih Rasa Kripik Sukun yang akan di Pesan: </h2>
 <table id="t01">
 <tr>
 	<th>Id</th>
 	<th>Rasa</th>
 	<th>Harga</th>
 	<th>Quantity (in stock)</th>
 	<th>Buy</th>
 </tr>
 	<?php while($product = mysqli_fetch_object($result)) { ?> 
	<tr>
		<td> <?php echo $product->id; ?> </td>
		<td> <?php echo $product->name; ?> </td>
		<td> Rp.<?php echo $product->price; ?> </td>
		<td> <?php echo $product->quantity; ?> </td>
		<td> <a href="cart.php?id= <?php echo $product->id; ?> &action=add">Order Now</a> </td>
	</tr>
	<?php } ?>
 </table>
</body>

 </html>