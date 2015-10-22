<html>
<head>
</head>
<body>

<?php 
require_once "connection.php";
$con = new connection();
$connection = $con->getConnection();
$query = "select * from manufacturer ";
$result = $connection->query($query) or die(mysqli_error($connection));
?>

<form method="post" action="validate.php">
<select name="selected" required>
<option value="">None</option>
<?php 
		while($row = $result->fetch_assoc()) { ?>	
		
			<option value="<?php echo $row["manufacturerId"]; ?>"> <?php echo $row["manufacturerName"]; ?> </option>
<?php } ?>
</select>
<input type="text" name="numofSerials" required/>
<input name="submit" type="submit" />
</form>
<a href="create.php"> create new user </a>

</body>
</html>