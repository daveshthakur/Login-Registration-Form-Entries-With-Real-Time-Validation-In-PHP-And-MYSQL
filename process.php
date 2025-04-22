
<?php 


include 'library/function.php, config.php';

//$db = new connect;
$newsignup = new signup;

extract($_POST);
/*$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$mobile = $_POST['mobile'];*/

$newsignup->insert($name,$email,$pass,$mobile);
redirectUrl('registration','Success');
	

 ?>