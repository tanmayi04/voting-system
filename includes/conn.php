<?php
	$conn = new mysqli('localhost', 'root', 'tanmayi04', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>