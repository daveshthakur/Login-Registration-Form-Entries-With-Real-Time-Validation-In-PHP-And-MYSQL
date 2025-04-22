<?php 
session_start();
class forgetpass{
	private $con;
	private $query;
	private $result;
	private $row;
	private $to;
	private $subject;
	private $message;
	private $header;


	public function __construct(){
		$this->con = new connection;
		$this->con = $this->con->link;
		return $this->con;
	}
	public function mail($email){
		$this->pass = genrate_password();
		$this->query = "UPDATE user SET pass ='$this->pass' WHERE email = '$email'";
		$this->result = $this->con->query($this->query);

		$get_useruniq=$this->query = "SELECT uniqueid FROM user WHERE email = '".$email."'";
		$this->results = $this->con->query($get_useruniq);
		$this->row = $this->results->fetch_assoc();
		$uniq_id=$this->row['uniqueid'];

		if($this->result){
			$this->to = $email;
			$this->subject = 'Recovered password';
			$this->message = 'Your Password is '.$this->pass.' and unique id is : '.$uniq_id;
			$this->header = 'From: SPACE India <getintouch@space-india.com>';

				if(mail($this->to, $this->subject, $this->message,$this->header)){
					echo '<script type="application/javascript">alert("Your Password is mailed to your mail address"); window.location.href = "index.php";</script>';
				}else{
					echo '<script type="application/javascript">alert("Mail Sending fail"); window.location.href = "forgot.php";</script>';
				}


		}else{
			echo '<script type="application/javascript">alert("This email address doesnt exsist"); window.location.href = "forgot.php";</script>';
		}
	}
}





 ?>