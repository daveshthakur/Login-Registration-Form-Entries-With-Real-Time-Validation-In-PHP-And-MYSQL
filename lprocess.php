<?php 

include 'library/function.php';

extract($_POST);

$login = new login;
$login->Login($name,$pass);




 ?>