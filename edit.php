<?php
require_once "ManufacturerDao.php";
require_once "connection.php";
$con = new Connection();
$connection = $con->getConnection();
$manufacturerDao = new ManufacturerDao($connection);

	$id = $_POST["selected"];	
	
	if(isset($_POST["activate"])){
	$manufacturerDao->activate($id);
	}
	
	elseif(isset($_POST["deactivate"])){
		$manufacturerDao->deActivate($id);
	}
	
?>