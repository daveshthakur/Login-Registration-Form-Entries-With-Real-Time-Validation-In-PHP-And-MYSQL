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
	
	public function check_student_uid($student_uid){
		$this->query = "SELECT * FROM `players` WHERE `userid`='".$student_uid."' ";
		$this->result = $this->con->query($this->query);
		$this->row = $this->result->fetch_assoc();
		return $this->row;
	}
	
	public function check_student_uid_school($student_uid,$school_code){
		$this->query = "SELECT * FROM `players` WHERE `userid`='".$student_uid."' AND `schoolcode`='".$school_code."' ";
		$this->result = $this->con->query($this->query);
		$this->row = $this->result->fetch_assoc();
		return $this->row;
	}
	
	public function check_school_location($location,$school_code){
		$this->query = "SELECT * FROM `record-1` WHERE `schoolcode`='".$school_code."' AND `location` = '".$location."' ORDER BY `school` ASC";		
		$this->result = $this->con->query($this->query);
		$this->row = $this->result->fetch_assoc();
		return $this->row;
	}
	
	public function check_schoolname($school_name,$school_code){
		$arr_s 	 = array('-', ', ',' ,',' , ','- ',' -',' - ');
		$this->query = "SELECT * FROM `record-1` WHERE `schoolcode`='".$school_code."' AND (`school` = '".$school_name."' OR CONCAT(`school`,',',`location`) = '".str_replace($arr_s,',',$school_name)."' OR `keywords1` = '".$school_name."' OR `keywords2` = '".$school_name."' OR `keywords3` = '".$school_name."' OR `keywords4` = '".$school_name."' OR `keywords5` = '".$school_name."') ORDER BY `school` ASC";		
		$this->result = $this->con->query($this->query);
		$this->row = $this->result->fetch_assoc();
		return $this->row;
	}
	
	public function school_name_and_location($search,$schoolcode){
		$rows = array();
		$sql = "SELECT * FROM `record-1` WHERE `schoolcode`='".$schoolcode."' AND (`school` LIKE '%".$search."%' OR `location` LIKE  '%".$search."%' OR `keywords` LIKE  '%".$search."%') ORDER BY `school` ASC";
		$qry = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($qry)){
			$rows[] = $row;
		}
		return $rows;
	}
	
}





 ?>