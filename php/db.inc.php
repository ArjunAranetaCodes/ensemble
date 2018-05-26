<?php
	$servername = "localhost";
	$username = "root1";
	$password = "";
	$dbname = "db_ensemble";

	$globservername = "localhost";
	$globusername = "root1";
	$globpassword = "";
	$globdbname = "db_ensemble";	

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
