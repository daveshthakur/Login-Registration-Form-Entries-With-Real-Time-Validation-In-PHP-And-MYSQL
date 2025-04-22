<?php 
class password{

	private $con;
	private $query;
	private $result;
	private $row;


	public function __construct(){
		$this->con = new connection;
		$this->con = $this->con->link;
		return $this->con;
	}

	public function OldPass($name){
		$this->query = "SELECT * FROM user WHERE email = '$name'";
		$this->result = $this->con->query($this->query);
		$this->row = $this->result->fetch_assoc();
		return $this->row['pass'];
	}

	public function checkPassword($oldpass,$userEnteredOldpass,$newpass,$cnfpass,$email){
		if($oldpass == $userEnteredOldpass){
				if($newpass==$cnfpass){
				$this->updateQ = "UPDATE user SET pass = '".$newpass."' WHERE email = '$email'";
				$this->res = $this->con->query($this->updateQ);
					if($this->res){
						echo '<script type="application/javascript">alert("Password Updated"); window.location.href = "index.php";</script>';
									}
					else{
						echo  '<script type="application/javascript">alert("ERROR"); window.location.href = "change-password.php";</script>';
						}
		}else{
			echo '<script type="application/javascript">alert("New Password and Confirm donot match"); window.location.href = "change-password.php";</script>';
		}
	}else{
		echo  '<script type="application/javascript">alert("Old Password doesnt match"); window.location.href = "change-password.php";</script>';
	}
	}
}






 ?>