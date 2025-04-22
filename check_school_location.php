 
 <?php

include 'library/function.php';
include 'config.php';

extract($_POST);
extract($_GET);
$sch = new checkschool;

if($school_location && $school_code)
{
	$result = $sch->check_school_location($student_uid,$school_code,$school_location);
	//print_r($result);

	if(is_countable($result) && count($result) > 0)
	 {
		if($result['location']!= "" && $result['schoolcode']!= ""){
			$error = false;
			$msg = "Success";
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
		$msg = "Please enter correct location!";
	}
}
else
{
	$error = true;
	$msg = "Please enter location!";
}
echo $error.'~'.$msg;


?>