<?php 
require_once "connection.php";
require_once "manufacturer.php";
class ManufacturerDao{
	public function __construct(){}
	
	//saves a manufacturer's name and ID in the database
	public function create($manufacturer){
		$name = $manufacturer->getname();
		$id = $manufacturer->getId();
		$con = new connection();
		$connection = $con->getConnection();
		
		$query = "insert into manufacturer values(null, '$name', '$id')";
		$result = $connection->query($query) or die(mysqli_error($connection));
	}

}
?>