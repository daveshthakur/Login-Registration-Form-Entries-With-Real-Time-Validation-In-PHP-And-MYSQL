<?php 

class connection{
	private $host;
	private $user;
	private $pass;
	private $dbname;
	public  $link;

	public function __construct(){
		$this->host = 'localhost';
		$this->user = 'u809244820_astronomyadmin';
		$this->pass = 'u809244820@ClubLogin';
		$this->dbname = 'u809244820_astronomylogin';
		$this->dbConnect();

	}
	
	protected function dbConnect()
	{
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		return $this->link;
	}
}


 ?>