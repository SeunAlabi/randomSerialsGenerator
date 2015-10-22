<html>
<head>
</head>
<body>

<?php 
require_once "connection2.php";
$query = "select * from list ";
$result = $connection->query($query) or die(mysqli_error($connection));
?>

<form method="post" action="#">
<select required>
<option value="">None</option>
<?php 
		while($row = $result->fetch_assoc()) { ?>
			<option value=""> <?php echo $row["names"] ?> </option>
<?php } ?>
</select>
<input type="text" name="numberofSerial" required/>
<input type="submit" />
</form>

</body>
</html>