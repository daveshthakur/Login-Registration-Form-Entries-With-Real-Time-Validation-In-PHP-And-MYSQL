<?php 

class login{
		private $query;
		private $result;
		private $con;
		private $row;

	public function __construct(){
		$this->con = new connection;
		$this->con = $this->con->link;
		return $this->con;
	}
	
	public function Login($name,$pass){
		$this->query = "SELECT * FROM user WHERE name ='".$name."' AND pass= '".$pass."'";
		$this->result = $this->con->query($this->query);
		$this->row = $this->result->fetch_assoc();
		if($this->row){
			session_start();
			$_SESSION['name'] = $this->row['name'];
			$_SESSION['password'] = $this->row['password'];
			$_SESSION['email'] =$this->row['email'];
			redirectUrl('welcome',msg_encode('You are successfully logged in'));
		}else{
			echo '<script type="application/javascript">alert("Email or Password is incorrect"); window.location.href = "index.php";</script>';
		}
	}
}






 ?>