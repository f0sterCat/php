<?php
	$host = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "database";

	// Create database connection
	$con = new mysqli($host, $username, $password, $dbname);
	
	// Check connection
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}
?>
