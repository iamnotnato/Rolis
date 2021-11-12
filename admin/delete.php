<?php
include_once("conn.php");

$select = "DELETE FROM orders where id='".$_GET['del_id']."'";
$query = mysqli_query($conn, $select) or die($select);
header("Location: orders.php");
?>