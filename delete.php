<?php
$conn = mysqli_connect("localhost", "root", "", "rolis");
if(isset($_POST["id"]))
{
	foreach($_POST["id"] as $id)
	{
		$sql = "DELETE FROM orders where id='".$id."'";
		mysqli_query($conn ,$sql);
	}
}
?>
