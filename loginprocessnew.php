
<?php 

include('library/function.php');

$servername = "localhost";
$username   = "u809244820_astronomyadmin";
$password   = "u809244820@ClubLogin";
$database   = "u809244820_astronomylogin";
  

// Create connection
$con = new mysqli($servername, $username, $password, $database);


// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
  }

  else
  {}

  if(isset($_POST['name']) && isset($_POST['pass']))
  {
    $name   = mysqli_escape_string($con, $_POST['name']);
    $pass   = mysqli_escape_string($con, $_POST['pass']);               
    $search = mysqli_query($con, "SELECT name, pass, active, email FROM user1 WHERE email='".$name."' AND pass='".$pass."' AND active='1'") or die(mysqli_error($con)); 
    $match  = mysqli_num_rows($search);
	$ml     = mysqli_fetch_array($search); 
    $ses_name = $ml['name'];

}
			
			if($match > 0){
				
				session_start();

		$_SESSION['name'] = $ses_name;

		$msg1 = "Login Complete! Thanks";
		header("Location:welcome.php?su=$msg1");
			}
			
			else
	{
		echo '<script type="application/javascript">alert("Oops! Login Failed! Please enter the correct login details or You need to activate your account first."); window.location.href = "index.php";</script>';
	}


 ?>