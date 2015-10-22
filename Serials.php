<?php
class Serials{
	private $id;
	private $productId;
	
	public function __construct(){
		$this->id = $id;
		$this->productId = $productId;
	}
	
	//get and set functions
	public function getId(){
		return $this->id;
	}
	public function getProductId(){
		return $this->productId;
	}
	public function setId($ID){
		$this->id = $ID;
	}
	public function getProductId(){
		return $this->productId;
	}
}
?>