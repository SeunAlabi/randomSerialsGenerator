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
					<div ><a href="index.php">Generate Serials</a></div>
					<div class="active"><a href="create.php">Create New User</a></div>	
					<div><a href="editList.php">Add/Delete User</a></div>
				</div>
		</div>


		<div class="col-md-3 main">
			<div id="center">
				<form method="post" action="validate.php">
				<input type="text" name="name" placeholder="enter manufacturer's name" required/>
				<input name="create" type="submit" value="CREATE"/>
				</form>
			<br/><br/><br/><br/>
			<p align="center" ><button class="btn btn-default"> <a href="index.php">HOME </a> </button></p>
			</div>
		</div>
		
	</div>
</body>
</html>