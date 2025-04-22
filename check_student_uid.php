
<?php 

include 'library/function.php';

extract($_POST);

$sch = new checkschool();
$result = $sch->student_uid_check($student_uid);

if(is_countable($result) && count($result) > 0)
{
	if($result['userid']!= "")
	{
		$error = false;
		$msg = "Success!!";
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
echo $error.'~'.$msg;

?>