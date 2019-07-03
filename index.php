<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Hello World

	Welcome Shashi,

	<?php

		$servername = "sql146.main-hosting.eu.";
		$username = "u802709898_sampl";
		$password = "sample123!@#";
		$database = "u802709898_sampl";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$database);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";
	?>
</body>
</html>