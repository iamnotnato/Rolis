<?php
include 'conn.php';
//get id
if(isset($_GET['edit_id'])){
	$sql = "SELECT * FROM info where id = ".$_GET['edit_id'];
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
}
//update
if(isset($_POST['btn-update'])){
	$first_name = $_POST['user'];
	$last_name = $_POST['pass'];
	$age = $_POST['age'];
	$update = "UPDATE info SET first_name='$first_name' ,last_name='$last_name',age='$age' WHERE id=". $_GET['edit_id'];
	$up = mysqli_query($conn, $update);
	if(!isset($sql)){
		die("Error $sql" .mysqli_connect_error());
	}
	else{
		header("location: display.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
<form method="post">
	<h1>EDIT INFO</h1>
	<label>First Name:</label><input type="text" name="first_name" placeholder="Name" 
	value="<?php echo $row['first_name']; ?>"> <br><br>
	<label>Last Name:</label><input type="text" name="last_name" placeholder="Name" 
	value="<?php echo $row['last_name']; ?>"> <br><br>
	<label>Age:</label><input type="text" name="age" placeholder="Age" 
	value="<?php echo $row['age']; ?>"> <br><br>
	<button type="submit" name="btn-update" id="btn-update" onclick="update()"><strong>Update</strong></button>
	<a href="display.php"><button type="button" value="button">Cancel</button></a>
</form>
<script>
	function update(){
		var x;
		if(confirm("Updated Data Successfully") === true){
			x = "update";
		}
	}
</script>
</body>
</html>