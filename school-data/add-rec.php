
<?php


if(isset($_POST["submit"]))
{
$url='localhost';
$username='u809244820_astronomyadmin';
$password='Web9Yn+b3[]*x';
$database='u809244820_astronomylogin';
$conn=mysqli_connect($url,$username,$password,$database);

if(!$conn){
die('Could not Connect My Sql:' .mysqli_error());
}

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
<!DOCTYPE html>
<html>
<body>
<form enctype="multipart/form-data" method="post" role="form">
<div class="form-group">
<label for="exampleInputFile">File Upload</label>
<input type="file" name="file" id="file" size="150">
<p class="help-block">Only Excel/CSV File Import.</p>
</div>
<button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
</form>
</body>
</html>