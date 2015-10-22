<?php
require_once "connection.php";
class Manufacturer{
	private $name;
	private $id;
	
	public function __construct($name){
		$this->name = $name;
		$this->id = $this->getRowCount();
	}
	
	//get and set functions
	public function getname(){
		return $this->name;
	}
	public function getId(){
		return $this->id;
	}
	public function setName($Name){
		$this->name = $Name;
	}
	public function setId($Id){
		$this->$id = $Id;
	}
	
	public static function getRowCount(){
		$con = new connection();
		$connection  = $con->getConnection();
		$query = "select * from manufacturer";
		$result = $connection->query($query) or die(mysqli_error($connection));
		return (mysqli_num_rows($result) + 10);
	}
}
?>