<?php
	$servername = "localhost";
	$username = "chanda";
	$password = "developer";
	$dbname = "zmd_map";
	
	// Create connection
	$map_db = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>