<?php 

require_once"manufacturer.php";
require_once "manufacturerDao.php";

if(isset($_POST["submit"])){
	$prefix= $_POST["selected"];
	$serial= $_POST["numofSerials"];

	echo getSerial($prefix, $serial);
	
}

if(isset($_POST["create"])){
	$name = $_POST["name"];
	$manufacturer = new manufacturer($name);
	$manufacturerDao = new manufacturerDao();
	$manufacturerDao->create($manufacturer);
	
}
		
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