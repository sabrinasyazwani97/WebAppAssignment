<?php
    $db = "users";

	$conn = mysqli_connect("localhost", "root", "", $db);
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>