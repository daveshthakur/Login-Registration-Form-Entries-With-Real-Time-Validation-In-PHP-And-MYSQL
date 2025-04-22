
<?php

// Create connection
$conn = mysqli_connect('localhost', 'u809244820_astronomyadmin', 'LoginClub@4820', 'u809244820_astronomylogin');

// Check connection
if(!$conn) {
    
 echo 'Connection Error: ' . mysqli_connect_error();
 
}

?>