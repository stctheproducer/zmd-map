<?php
	$servername = "localhost";
	$username = "chanda";
	$password = "developer";
	$dbname = "zmd_map";
	
	// Create connection
	$map_db = new mysqli($servername, $username, $password, $dbname);
	if ($map_db->connect_error) {
		die("Connection failed: " . $map_db->connect_error);
	} 
	$max_temp = null;
	$min_temp = null;
	$pressure = null;
	$rain = null;

	//add readings
	if (isset($_POST['submit_add_readings'])) {
		//Prepare and bind
		$add_readings = $map_db->prepare("INSERT INTO readings (max_temp, min_temp, pressure, rain) VALUES (?, ?, ?, ?)");
		$add_readings->bind_param("iiii", $max_temp, $min_temp, $pressure, $rain);

		$max_temp = $_POST['max_temp'];
		$min_temp = $_POST['min_temp'];
		$pressure = $_POST['pressure'];
		$rain = $_POST['rain'];
		$add_readings->execute();

		$add_readings->close();
	}
?>