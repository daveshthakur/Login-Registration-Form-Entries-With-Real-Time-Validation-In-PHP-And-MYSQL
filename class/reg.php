<?php 

class reg{
	private $con;

	public function __construct(){
		$this->con = new connection;
		$this->con = $this->con->link;
		return $this->con;
	}

	public function insert($uid,$name,$class,$section,$email,$pass,$mobile,$face,$add,$hash,$uniqueid)
	{
		$this->query = "INSERT INTO user(uid,name,class,section,email,pass,mobile,facebook,address,hash,uniqueid) VALUES('".$uid."','".$name."','".$class."','".$section."','".$email."','".$pass."','".$mobile."','".$face."','".$add."','".$hash."','".$uniqueid."')";
		$this->success = $this->con->query($this->query);
		if($this->success){
			echo '<script type="application/javascript">alert("Hello! A verification mail has been sent to your email id. Kindly confirm your email address by clicking on the link that has been mailed to you."); window.location.href = "index.php";</script>';
		}else{
			echo '<script type="application/javascript">alert("error"); window.location.href = "index.php";</script>';
		}
	}
	
	public function insertnew($userid,$schoolcode,$school_location,$schoolname,$name,$class,$section,$email,$pass,$mobile,$hash,$uniqueid)
	{
		$this->query = "INSERT INTO `user1`(userid,schoolcode,school_location,schoolname,name,class,section,email,pass,mobile,hash,uniqueid) 
		VALUES('".$userid."','".$schoolcode."','".$school_location."','".$schoolname."','".$name."','".$class."','".$section."','".$email."','".$pass."','".$mobile."','".$hash."','".$uniqueid."')";
		$this->success = $this->con->query($this->query);
		if($this->success){
			echo '<script type="application/javascript">alert("Hello! A verification mail has been sent to your email id. Kindly confirm your email address by clicking on the link that has been mailed to you."); window.location.href = "index.php";</script>';
		}else{
			echo '<script type="application/javascript">alert("error"); window.location.href = "index.php";</script>';
		}
	}


}



 ?>