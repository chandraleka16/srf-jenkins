<?php
	$conn = mysqli_connect("mysql", "mychan_user1", "password123", "lamp_task");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
