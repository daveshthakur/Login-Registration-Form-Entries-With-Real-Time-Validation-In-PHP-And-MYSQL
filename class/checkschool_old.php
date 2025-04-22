<?php 

class checkschool{
	private $con;
	private $query;
	private $result;
	private $row;
	

	public function __construct(){
		$this->con = new connection;
		$this->con = $this->con->link;
		return $this->con;
	}

	
		public function check_code($school_code){
		 $this->query = "SELECT * FROM `record-1` WHERE `schoolcode`='".$school_code."' ";
		$this->result = $this->con->query($this->query);
		$this->row = $this->result->fetch_assoc();
		return $this->row;
	}
}





 ?>