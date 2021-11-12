<?php
include 'conn.php';

$sql = "SELECT * FROM userpass";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display Records</title>
</head>
<body>
<h1 align="center">Information</h1>
<?php 
if(mysqli_num_rows($query) >0)
{
?>
<table align="center" border="1" style="line-height: 25px;">
	<tr>
		<th>Employee ID</th>
		<th>UserName</th>
		<th>Password</th>
		<th>Delete</th>
	</tr>
<?php
while ($row = mysqli_fetch_array($query)) 
{
?>
<tr>
	<td><?php echo $row['id']; ?> </td>
	<td><?php echo $row['user']; ?> </td>
	<td><?php echo $row['pass']; ?> </td>
	<td><input type="checkbox" name="id" value="<?php echo $row["id"];?>"></td>
</tr>

<?php 
 }
?>
</table>
<?php 
 }
?>
<p align="center">
	<button type="button" name="delete" id="delete">DELETE</button>
</p>
    <script src="js/jquery-3.3.1.js"></script>
</body>
</html>
<script>
$(document).ready(function(){
	$('#delete').click(function(){
		if(confirm("Are you sure?"))
		{
			var id = [];
			$(':checkbox:checked').each(function(i){
				id[i] = $(this).val();
			});
			if(id.length === 0)
			{
				alert("Please select checkbox");
			}
			else
			{
				$.ajax({
					url:"delete.php",
					method : "POST",
					data: {id:id},
					success : function(){
						for(var i = 0; i<id.length; i++)
						{
							$('tr#'+id[i]+'').css('background-color','#ccc');
							$('tr#'+id[i]+'').fadeOut('slow');
						}
					}
				});
			}
		}
	});
});
</script>