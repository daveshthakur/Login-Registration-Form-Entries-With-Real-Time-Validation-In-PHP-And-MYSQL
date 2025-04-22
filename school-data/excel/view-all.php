<!DOCTYPE html>
<?php 
	include 'db.php';
	


?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import Excel To Mysql Database Using PHP </title>
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
		<div class="navbar-inner" style="padding:15px 0 15px 15px;"><img src="img/space-logo-new.png"></div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
<?php 

echo "<p><b>View All</b> | <a href='index.php?page=1'>View Paginated</a></p>";
?>		
        
      

		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>User</th>
				  		<th>School Code</th>
				  		<th>School Name</th>
				  		<th>Location</th>
				  		<th>Keywords1</th>
                        <th>Keywords2</th>
                        <th>Keywords3</th>
                        <th>Keywords4</th>
				 		
				 
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM players ";
				$result_set =  mysql_query($SQLSELECT, $conn);
				while($row = mysql_fetch_array($result_set))
				{
				?>
			
					<tr>
						<td><?php echo $row['userid']; ?></td>
						<td><?php echo $row['schoolcode']; ?></td>
						<td><?php echo $row['schoolname']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['keywords1']; ?></td>
                        <td><?php echo $row['keywords2']; ?></td>
                        <td><?php echo $row['keywords3']; ?></td>
                        <td><?php echo $row['keywords4']; ?></td>
						<?php echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';?>
                        
<?php echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';?>
						
					</tr>
				<?php
				}
			?>
		</table>
	</div>

	</div>

	</body>
</html>