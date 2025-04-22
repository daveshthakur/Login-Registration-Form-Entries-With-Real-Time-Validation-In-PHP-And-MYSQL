
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Sign up</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    
    <!-- start header div --> 
    <?php
    
include('library/function.php');
include('connection.php');

    header("Refresh:4; url=index.php");
?>
    <div id="header">
     
    </div>
    <!-- end header div -->   
     
    <!-- start wrap div -->   
    <div id="wrap">
        
        <!-- start PHP code -->
        <?php
	function redirect() {
		header('Location: index.php');
		exit();
	}

	if (!isset($_GET['email']) || !isset($_GET['hash'])) {
		redirect();
	} else {
		$con = new mysqli('localhost', 'u809244820_astronomyadmin', 'u809244820@ClubLogin', 'u809244820_astronomylogin');

		$email = $con->real_escape_string($_GET['email']);
		$hash = $con->real_escape_string($_GET['hash']);

		$sql = $con->query("SELECT id FROM user1 WHERE email='$email' AND hash='$hash' AND active=0");

		if ($sql->num_rows > 0) {
			$con->query("UPDATE user1 SET active=1, hash='' WHERE email='$email'");
			echo '<script type="application/javascript">alert("Your Account Has Been Activated Successfuly, You Can Now Login!");window.location.href = "index.php";</script>';
		} else
		
			echo '<script type="application/javascript">alert("Invalid Approach, Please Use The Link That Has Been Send To Your Email.");window.location.href = "index.php";</script>';
			redirect();
	}
?>
        <!-- stop PHP Code -->
 
         
    </div>
    <!-- end wrap div --> 

    
</body>
</html>