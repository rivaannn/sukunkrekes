<!DOCTYPE html>
<head>
	<title>Keranjang</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="asset2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset2/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset2/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset2/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset2/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset2/css/main.css">
</head>
<body>
<?php 
// Start the session
session_start();
require 'koneksi.php';
require 'item.php';

if(isset($_GET['id']) && !isset($_POST['update']))  { 
	$sql = "SELECT * FROM product WHERE id=".$_GET['id'];
	$result = mysqli_query($connect, $sql);
	$product = mysqli_fetch_object($result); 
	$item = new Item();
	$item->id = $product->id;
	$item->name = $product->name;
	$item->price = $product->price;
    $iteminstock = $product->quantity;
	$item->quantity = 1;
	// Check product is existing in cart
	$index = -1;
	$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
	for($i=0; $i<count($cart);$i++)
		if ($cart[$i]->id == $_GET['id']){
			$index = $i;
			break;
		}
		if($index == -1) 
			$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
		else {
			
			if (($cart[$index]->quantity) < $iteminstock)
				 $cart[$index]->quantity ++;
			     $_SESSION['cart'] = $cart;
		}
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
// Update quantity in cart
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->quantity = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}
?>
<form method="POST">
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table id="t01">
						<thead>
<tr class="table100-head">
	<th class="column1"><center>Option</center></th>
	<th class="column2"><center>Id</center></th>
	<th class="column3"><center>Rasa</center></th>
	<th class="column4"><center>Harga</center></th>
	<th class="column5"><center>Quantity</center></th>
	 
	<th class="column6"><center>Total</center></th>
</tr>
</thead>
<tbody>
<?php 
     $cart = unserialize(serialize($_SESSION['cart']));
 	 $s = 0;
 	 $index = 0;
 	for($i=0; $i<count($cart); $i++){
 		$s += $cart[$i]->price * $cart[$i]->quantity;
 ?>	
   <tr>
    	<td><center><a class="btn btn-danger" href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Apakah kamu yakin ingin di hapus dari keranjang?')" >Delete</a></center></td>
   		<td><center><?php echo $cart[$i]->id; ?></center></td>
   		<td><center><?php echo $cart[$i]->name; ?></center></td>
   		<td><center>Rp. <?php echo $cart[$i]->price; ?></center></td>
        <td><center><strong><input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]"></strong></center></td>  
        <td><center>Rp.<?php echo $cart[$i]->price * $cart[$i]->quantity; ?></center></td> 
   </tr>
 	<?php 
	 	$index++;
 	} ?>
 	<tr align="right">
 		<td colspan="5" style="text-align:right; font-weight:bold"> 
         <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button">
         <input type="hidden" name="update">
 		</td>
 		<td> Rp.<?php echo $s; ?> </td>
 	</tr>
 </tbody>
</table>
</form>

<br>
<a class="btn btn-info" href="homeuser.php">Continue Shopping</a> | <a class="btn btn-info" href="form_pembayaran.php">Checkout</a>
<?php 
if(isset($_GET["id"]) || isset($_GET["index"])){
 header('Location: cart.php');
} 
?>
	<script src="asset2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset2/vendor/bootstrap/js/popper.js"></script>
	<script src="asset2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset2/js/main.js"></script>
</body>
 </html>
