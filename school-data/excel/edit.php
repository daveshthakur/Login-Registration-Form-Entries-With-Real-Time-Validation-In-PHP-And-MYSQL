<!DOCTYPE html>
<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $user, $code, $name, $location, $keywords1, $keywords2, $keywords3, $keywords4, $error)

{

?>
	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Edit Records</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">


	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner" style="padding:15px 0 15px 15px;"><a href="index.php"><img src="img/space-logo-new.png"></a></div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
            
        <?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>
			<div class="span6" id="form-login">
				<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>
<p><span style="color:#F00">* </span>Required</p>
<strong>User ID: <span style="color:#F00">*</span></strong> <input type="text" name="userid" value="<?php echo $user; ?>"/><br/>

<strong>School Code:<span style="color:#F00"> *</span></strong> <input type="text" name="schoolcode" value="<?php echo $code; ?>"/><br/>

<strong>School Name: <span style="color:#F00">*</span></strong> <input type="text" name="schoolname" value="<?php echo $name; ?>"/><br/>

<strong>Location: <span style="color:#F00">*</span></strong> <input type="text" name="location" value="<?php echo $location; ?>"/><br/>

<strong>Keywords1: <span style="color:#F00">*</span></strong> <input type="text" name="keywords1" value="<?php echo $keywords1; ?>"/><br/>

<strong>Keywords2: <span style="color:#F00">*</span></strong> <input type="text" name="keywords2" value="<?php echo $keywords2; ?>"/><br/>

<strong>Keywords3: <span style="color:#F00">*</span></strong> <input type="text" name="keywords3" value="<?php echo $keywords3; ?>"/><br/>

<strong>Keywords4: <span style="color:#F00">*</span></strong> <input type="text" name="keywords4" value="<?php echo $keywords4; ?>"/><br/>

<input type="submit" name="submit" value="Submit">

</div>

</form>

			</div>
			<div class="span3 hidden-phone"></div>
		</div>
	</div>

	</div>

	</body>
</html>

<?php

}







// connect to the database

include('connect-db.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id']))

{

// get form data, making sure it is valid

$id = $_POST['id'];

$user = mysql_real_escape_string(htmlspecialchars($_POST['userid']));

$code = mysql_real_escape_string(htmlspecialchars($_POST['schoolcode']));

$name = mysql_real_escape_string(htmlspecialchars($_POST['schoolname']));

$location = mysql_real_escape_string(htmlspecialchars($_POST['location']));

$keywords1 = mysql_real_escape_string(htmlspecialchars($_POST['keywords1']));

$keywords2 = mysql_real_escape_string(htmlspecialchars($_POST['keywords2']));

$keywords3 = mysql_real_escape_string(htmlspecialchars($_POST['keywords3']));

$keywords4 = mysql_real_escape_string(htmlspecialchars($_POST['keywords4']));

// check that firstname/lastname fields are both filled in

if ($user == '' || $code == '' || $name == '' || $location == '' || $keywords1 == '' || $keywords2 == '' || $keywords3 == '' || $keywords4 == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($id, $user, $code, $name, $location, $keywords1, $keywords2, $keywords3, $keywords4, $error);

}

else

{

// save the data to the database

mysql_query("UPDATE players SET userid='$user',
schoolcode='$code',
schoolname='$name',
location='$location',
keywords1='$keywords1',
keywords2='$keywords2',
keywords3='$keywords3',
keywords4='$keywords4' WHERE id='$id'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: index.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM players WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db
$user = $row['userid'];

$code = $row['schoolcode'];

$name = $row['schoolname'];

$location = $row['location'];

$keywords1 = $row['keywords1'];

$keywords2 = $row['keywords2'];

$keywords3 = $row['keywords3'];

$keywords4 = $row['keywords4'];


// show form

renderForm($id, $user, $code, $name, $location, $keywords1, $keywords2, $keywords3, $keywords4, '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>