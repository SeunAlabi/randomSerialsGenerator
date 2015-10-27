<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	<div class="container-fluid head" >
		
	  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
		RandomGenerator
	</div>
	
	
	<div class="row">
		<br/><br/><br/><br/><br/><br/>
		<div class="col-md-2 col-md-offset-3">
				<div id="nav">
					<div><a href="index.php">Generate Serials</a></div>
					<div><a href="create.php">Create New User</a></div>	
					<div class="active"><a href="editList.php">Add/Delete User</a></div>
				</div>
		</div>
	
	<?php 
	require_once "connection.php";
	$con = new connection();
	$connection = $con->getConnection();
	?>

	
	<div class="col-md-3 main">
		<div id="center">
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
</div>
	</div>
</div>
</body>
</html>