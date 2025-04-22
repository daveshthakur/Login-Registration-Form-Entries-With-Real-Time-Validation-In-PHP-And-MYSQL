
<?php 

include 'library/function.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<div align="center">
		<h1>Login</h1>
		<?php getMsg(); ?>
		<form action="lprocess.php" method="POST">
			
			<p>
				<input type="text" name="uid" placeholder="UID">
			</p>
			<p>
				<input type="password" name="pass" placeholder="Password">
			</p>
			
			<p>
				<input type="submit" name="submit" value="Login">
			</p>
		</form>
		Forgot password?? <a href="forget.php">Click Here</a><br>
		Don't have an account? <a href="signup.php"> Register Here</a><br><br>
		<form action="" method="POST">
			<p>
				<input type="text" name="uid_check" placeholder="Enter Your UID">
			</p>
			<p>
				<input type="submit" name="submit" placeholder="Check Your School">
			</p>
		</form>
	</div>

</body>
</html>

<?php 

if(isset($_POST['submit'])){
	?>
	
	<script>alert("Your School Details are below");</script>
	<?php } 
	
	?>
