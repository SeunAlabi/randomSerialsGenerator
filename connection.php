<?php
class Connection {
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db = "randomserial";
	
	public function getConnection() {
		return new Mysqli($this->host, $this->user, $this->pass, $this->db);
	}
}
?>