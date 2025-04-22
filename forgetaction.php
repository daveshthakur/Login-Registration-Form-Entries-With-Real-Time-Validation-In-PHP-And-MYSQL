<?php

include 'config.php';
include 'library/function.php';

extract($_POST);
$user = new forgetpass;
$user->mail($email);


 ?>