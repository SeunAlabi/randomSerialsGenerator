<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<?php 
require_once "connection.php";
$con = new connection();
$connection = $con->getConnection();
$query = "select * from manufacturer where active=1";
$result = $connection->query($query) or die(mysqli_error($connection));
?>
<div class="container-fluid head" >
	
  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
	RandomGenerator
</div>

<div class="row">
<br/><br/><br/><br/><br/><br/>
	<div class="col-md-2 col-md-offset-3">
			<div id="nav">
				<div class="active"><a href="index.php">Generate Serials</a></div>
				<div><a href="create.php">Create New User</a></div>	
				<div><a href="editList.php">Add/Delete User</a></div>
			</div>
	</div>

	<div class="col-md-3 main">
		<div id="center">
			<form method="post" action="validate.php" class="form-horizontal formit">
			<div class="form-group input-group-lg">
			<input type="text" class="form-control" placeholder="enter number of serials" name="numofSerials" aria-describedby="basic-addon1" required />
			</div>
			<br/>
			<select name="selected" required>
			<option value="">None</option>
			<?php 
					while($row = $result->fetch_assoc()) { ?>	
					
						<option value="<?php echo $row["manufacturerId"]; ?>"> <?php echo $row["manufacturerName"]; ?> </option>
			<?php } ?>
			</select>
			
			<button type="submit" name="submit" class="btn btn-default">Submit</button>
			</form>
		<!--<a href="create.php"> create new user </a>-->
		</div>
	</div>
</div>
</body>
</html>