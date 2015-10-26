<?php 
require_once "connection.php";
require_once "manufacturer.php";
class ManufacturerDao{
	private $connection;
	public function __construct($connection){
		$this->connection = $connection;
	}
	
	
	//saves a manufacturer's name and ID in the database
	public function create($manufacturer){
		$name = $manufacturer->getname();
		$id = $manufacturer->getId();
				
		$query = "insert into manufacturer values(null, '$name', '$id', 1)";
		$result = $this->connection->query($query) or die(mysqli_error($this->connection));
	}
	
	//set column "active" to 1
	public function activate($id){
		$query = "UPDATE manufacturer SET active=1 WHERE manufacturerId= $id";
		$result = $this->connection->query($query) or die(mysqli_error($this->connection));
		header("location:index.php");
	}
	
	//set active column to 0. The name that coresponds to $id would not be populated in the dropdown list on the index page
	public function deActivate($id){
		$query = "UPDATE manufacturer SET active=0 WHERE manufacturerId= $id";
		$result = $this->connection->query($query) or die(mysqli_error($this->connection));
		header("location:index.php");
	}
}
?>