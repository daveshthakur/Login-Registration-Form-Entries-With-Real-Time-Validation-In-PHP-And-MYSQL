<?php 
session_start();

if (isset($_POST['submit'])) {
	$oldpass  = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	$name = $_SESSION['name'];
	

	$query = "UPDATE user SET pass = '$newpass' WHERE name ='$name' AND pass ='$oldpass'";
	
	
	$conn = mysqli_connect('localhost','u809244820_astronomyadmin','fqUR&**5G$paceclub','u809244820_astronomylogin') or die("Connection Error");
	
	
	$queryselect = "SELECT * FROM user WHERE name = '$name'";
	$res = mysqli_query($conn,$queryselect);
	$row = mysqli_fetch_array($res);
	$dbpass =  $row['pass'];

	if($oldpass==$dbpass)
	{
		if(mysqli_query($conn,$query))
			{
				$sucess =  "Password succesfully Updated";
				header("Location:change-password.php?msg1=$sucess");
			}else
			{
				$err ="Error in Updating";
				header("Location:change-password.php?msg=$err");
			}
		}else
	{
		$mmm = "Old password is wrong";
		header("Location:change-password.php?msg=$mmm");
	}


}





 ?>