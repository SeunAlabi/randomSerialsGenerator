<?php
require_once "connection.php";
class Serials{
	//private $manufacturerId;
	//private $productId;
	private $connection;
	
	public function __construct($connection){
		//$this->manufacturerId = $manufacturerid;
		//$this->productId = $productid;
		$this->connection = $connection;
	}
	
	//get and set functions
	// public function getManufacturerId(){
		// return $this->manufacturerId;
	// }
	// public function getProductId(){
		// return $this->productId;
	// }
	// public function setId($ID){
		// $this->id = $ID;
	// }
	// public function getProductId(){
		// return $this->productId;
	// }
	
	
	
	//generates random strings of characters based on the given length
	public function randGenerator($length) {
        mt_srand((double)microtime() * 1000000); 
        $possible = '0123456789'; 
        $randompass =""; 
        while(strlen($randompass) < $length) {
                $randompass .= substr($possible, mt_rand(0, strlen($possible) -1), 1); 
        }
		return($randompass);
		}

		//generates series of unique serials, then saves them in the database
	public function getSerial($manufacturerId, $numberOfSerials){
		$count = 0;
		while($count < $numberOfSerials){
				$randomString = self::randGenerator(8);
				$productId = $manufacturerId.$randomString;	
				$query = "select * from serials where productId = $productId" ;
				$result = $this->connection->query($query) or die(mysqli_error($this->connection));
				if (mysqli_num_rows($result)>0){
					$count -=1;
				}
				else{
				//saves manufacturerId and productId into the database
				$new_query = "insert into serials values(null, '$manufacturerId', '$productId')";
				$new_result = $this->connection->query($new_query) or die(mysqli_error($this->connection));
				}
				$count++;
			}
		}
}
?>