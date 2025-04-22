
<?php


define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_SERVER', 'localhost');
define('DB_NAME', '');

// Create a connection
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if($con == false) {
     die("ERROR :Connection failed " . mysqli_connect_error());}
     else
     {
         
     }


?>