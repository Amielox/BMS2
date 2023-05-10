<?php
	$conn = new mysqli('localhost', 'root', '', 'barangaysystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>