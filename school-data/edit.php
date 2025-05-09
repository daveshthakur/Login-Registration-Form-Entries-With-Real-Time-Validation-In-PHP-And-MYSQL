<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $user, $code, $name, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Record</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>

<strong>User ID: *</strong> <input type="text" name="userid" value="<?php echo $user; ?>"/><br/>

<strong>School Code: *</strong> <input type="text" name="schoolcode" value="<?php echo $code; ?>"/><br/>

<strong>School Name: *</strong> <input type="text" name="schoolname" value="<?php echo $name; ?>"/><br/>

<p>* Required</p>

<input type="submit" name="submit" value="Submit">

</div>

</form>

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



// check that firstname/lastname fields are both filled in

if ($user == '' || $code == '' || $name == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($id, $user, $code, $name, $error);

}

else

{

// save the data to the database

mysql_query("UPDATE players SET userid='$user',
schoolcode='$code',
schoolname='$name' WHERE id='$id'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: view.php");

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



// show form

renderForm($id, $user, $code, $name, '');

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