
<!DOCTYPE html>
<html>
<head>
	<title>Change Your Password</title>
</head>
<body>
	<div align="center">
		<h1>Change Password</h1>
		<form action="checkpass.php" method="POST">
			<p>
				<input type="password" name="oldpass" placeholder="Old Password">
			</p>
			<p>
				<input type="password" name="newpass" placeholder="New Password">
			</p>
			<p>
				<input type="password" name="cnfpass" placeholder="Confirm Password">
			</p>
			<p>
				<input type="submit" name="submit" value="Update">
			</p>
		</form>
	</div>

</body>
</html>