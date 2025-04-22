<?php 


class password
{

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
				$this->update = "UPDATE user SET pass = '".$newpass."' WHERE email = '$email'";
				$this->result = $this->con->query($this->update);
					if($this->result){
						echo "Password Updated";
									}
					else{
						echo "ERROR";
						}
		}
		else
		{
			echo "New Password and Confirm password do not match";
		}
	}
	else
	{
		echo "Old Password do not match";
	}
	}
}

 ?>