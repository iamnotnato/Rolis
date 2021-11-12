<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rolis");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container" style="width: 60%;">
	<h2 align="center">Shopping Cart</h2>
	<?php
	$query = "SELECT * FROM products ORDER BY id ASC";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result)) {
			?>
		<div class="col-md-4">
			<form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
				<div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px  2px rgba(0,0,0,0.05);
				padding: 10px" align="center">
				<img src="<?php echo $row["image"]; ?>" class="img-responsive">
				<h5 class="text-info"><?php echo $row["p_name"]; ?> </h5>
				<h5 text class="danger">$ <?php echo $row["price"]; ?> </h5>
				<input type="text" name="quantity" class="form-control" value="1">
				<input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
				<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
				<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-default" value="Add To Cart">
			</div>
		</form>
	</div>

	<?php
}
}
?>
<div style="clear:both"></div>
<h2>My Shopping Cart</h2>
<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th width="49%">Product Name </th>
			<th width="10%">Quantity </th>
			<th width="20%">Price Details </th>
			<th width="15%">Order Total</th>
			<th width="5%">Action </th>
		</tr>
		<?php
		if(!empty($_SESSION["cart"]))
		{
			$total = 0;
			foreach ($_SESSION["cart"] as $keys=> $values)

	{
		?>
		<tr>
			<td><?php echo $values["item_name"]; ?> </td>
			<td><?php echo $values["item_quantity"]; ?> </td>
			<td> KES <?php echo $values["product_price"]; ?> </td>
			<td> KES <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?> </td>
			<td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?> "><span class="text-danger">X</span></a>
			</td>
		</tr>
		<?php
		$total = $total + ($values["item_quantity"] * $values["product_price"]);
	}
	?>
	<tr>
		<td colspan="3" align="right">Total </td>
		<td align="right">KES <?php echo number_format($total, 2); ?></td>
		<td></td>
	</tr>
	<?php
}
?>
</table>
</div>
</div>
<script src="<?php echo base_url() ; ?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
</body>
</html>