<?php 
require_once "connection.php";
require_once "manufacturer.php";
require_once "manufacturerDao.php";
require_once "Serials.php";

if(isset($_POST["submit"])){
	$manufacturerId= $_POST["selected"];
	$numofSerials = $_POST["numofSerials"];

	$con = new connection();
	$connection = $con->getConnection();
	$serialObject = new Serials($connection);
	$serialObject->getSerial($manufacturerId, $numofSerials);	
	header("location:index.php");	
}


if(isset($_POST["create"])){
	$name = $_POST["name"];
	$manufacturer = new manufacturer($name);
	$manufacturerDao = new manufacturerDao();
	$manufacturerDao->create($manufacturer);
	header("location:index.php");	
}






		//generates random strings of characters based on the given length
		function randGenerator($length) {
        mt_srand((double)microtime() * 1000000); 
        $possible = 'abcdefghijklmnopqrstuvwxyz0123456789' . 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
        $randompass =""; 
        while(strlen($randompass) < $length) {
                $randompass .= substr($possible, mt_rand(0, strlen($possible) -1), 1); 
        }
		return($randompass);
		}

		function getSerial($prefix, $numberOfSerials){
			for($i=0; $i<$numberOfSerials; $i++){
				echo $prefix.randGenerator(8)."<br/>";
				
			}
		}
?>