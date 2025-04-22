
<?php


include 'config.php';
include 'library/function.php';

extract($_POST);
extract($_GET);
$sch = new checkschool;

if($school_name && $school_code)
{
	$result = $sch->check_schoolname($student_uid,$school_code,$school_name);

	//print_r($result);
	
	 if(is_countable($result) && count($result) > 0)
	 {
		if($result['schoolname'] != "" && $result['schoolcode'] != "")
		{
			$error = false;
			$msg = "Success!";
		}
		else
		{
			$error = true;
			$msg = "Incorrect Details!";
		}
	}
	else
	{
		$error = true;
		$msg = "Incorrect Details!";
	}
}
else
{
	$error = true;
	$msg = "Please Enter Correct Schoolname..";
}
echo $error.'~'.$msg;


?>