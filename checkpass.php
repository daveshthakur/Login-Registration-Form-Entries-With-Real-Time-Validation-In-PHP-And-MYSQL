<?php


session_start();

include 'config.php';
include 'library/function.php';

extract($_POST);

$email = $_SESSION['email'];
$pwd = new password;

$olddbpass = $pwd->OldPass($email);
//$olddbpass = $_SESSION['password'];



$pwd->checkPassword($olddbpass,$oldpass,$newpass,$cnfpass,$email);
//echo $olddbpass,$oldpass,$newpass,$cnfpass;





 ?>