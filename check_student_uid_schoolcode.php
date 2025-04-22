
<?php


include 'config.php';
include 'library/function.php';

extract($_POST);
$sch = new checkschool();

$result = $sch->check_schoolcode($student_uid,$school_code);

if(is_countable($result) && count($result) > 0)
{
	if($result['userid']!= "" && $result['schoolcode']!= ""){
		$error = false;
		$msg = "Success!";
	}else{
		$error = true;
		$msg = "Incorrect Details!";
	}
}else{
	$error = true;
	$msg = "Incorrect Details!";
}
echo $error.'~'.$msg;


?>