<html>
<head>
</head>
<body>

<?php 
require_once "connection.php";
$con = new connection();
$connection = $con->getConnection();
?>

	<form method="post" action="edit.php">
	<select name="selected" required>
	<option value="">None</option>
	<?php 
			$query = "select * from manufacturer where active = 0";
			$result = $connection->query($query) or die(mysqli_error($connection));
			while($row = $result->fetch_assoc()) { ?>
			
				<option value="<?php echo $row["manufacturerId"]; ?>"> <?php echo $row["manufacturerName"]; ?> </option>
				
	<?php } ?>
	</select>	
			<input type="submit" value="ACTIVATE" name="activate" />
	</form>
	
	<br/>
	<br/>
	
	<form method="post" action="edit.php">
	<select name="selected" required>
	<option value="">None</option>
	<?php 
			$query = "select * from manufacturer where active = 1";
			$result = $connection->query($query) or die(mysqli_error($connection));
			while($row = $result->fetch_assoc()) { ?>
			
				<option value="<?php echo $row["manufacturerId"]; ?>"> <?php echo $row["manufacturerName"]; ?> </option>
				
	<?php } ?>
	</select>			
			<input type="submit" value="DEACTIVATE" name="deactivate"/> 
	</form>
</body>
</html>