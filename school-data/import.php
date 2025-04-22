
<?php


include 'db.php';
if(isset($_POST["Import"])){
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$c = 0;
while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
{
$user = $filesop[0];
$code = $filesop[1];
$name = $filesop[2];

$sql = "insert into players(userid,schoolcode,schoolname) values ('$user','$code','$name')";
$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_execute($stmt);
$c = $c + 1;
}
if($sql){
echo "sucess";
} 
else
{
echo "Sorry! Unable to impo.";
}
}
?>