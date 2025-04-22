<?php

$number=$_POST['number'];

if(file_exists($number))
{
	echo $number;
	return true;
}
else
{
	echo "Please Enter a Valid Code";
	return false;
}

?>