
<?php 

function spl__autoload($class)
{
    include "class/$class.php";
}
spl_autoload_register("spl__autoload");


function getMsg(){
	echo msg_decode(@$_GET['msg']);
}

function Logout(){
	session_unset();
	session_destroy();
	redirectUrl('index',msg_encode("Logged Out"));
}

function msg_encode($msg){
	return base64_encode($msg);
}

function msg_decode($deCodeMsg){
	return base64_decode($deCodeMsg);
}

function genrate_password(){
	 return rand(1111,9999);
}

 ?>