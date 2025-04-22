

<?php


require_once("config.php");

session_start();

session_unset();
session_destroy();


$msg1 = "You have Successfully Logged Out";
header("Location: index.php");
exit();


 ?>