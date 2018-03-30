<?php  
	// Variables to connect to the database
	$servername = "localhost";
	$username = "root";
	$password = "cps630group43";
	$dbname = "cps630";

	// Connecting to the database
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	// -------------------------------------------------
?>