 
 <?php 
 
require_once 'config.php';
include 'library/function.php';

extract($_POST);
$sch = new checkschool;

  $result=$sch->check_code($school_code);
  if(count($result) > 0){
 echo $result['school'].', '.$result['location'];
  }else{
	  echo "School Not Found";
  }





 ?>