<?php 
require_once "connection.php";
require_once "";
class SerialDao{
	
	public function __construct(){}
		
	public function randGenerator($length) {
        mt_srand((double)microtime() * 1000000); 
        $possible = 'abcdefghijklmnopqrstuvwxyz0123456789' . 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
        $randompass =""; 
        while(strlen($randompass) < $length) { 
                $randompass .= substr($possible, mt_rand(0, strlen($possible) -1), 1); 
        }
		return($randompass);
		}
		
	public function getSerial(){
		for($i=0; $i<$numberOfSerials; $i++){
				echo $prefix.randGenerator(8)."<br/>";
			}
	}
}
?>