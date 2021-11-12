<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "rolis";

$conn = new mysqli($server, $user, $pass, $dbname);

$customer_name = $row['customer_name'];

$sql = "INSERT INTO sales (customer_name) VALUES ('$customer_name')";

if($conn->query($sql) === TRUE){
	echo "Record added Successfully";
}
else{
	echo "Error" . sql . "<br>" . $conn->error;
}
$conn->close();

?>