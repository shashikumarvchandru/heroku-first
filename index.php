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
		$password = "rHFECdEDT3h6";
		$database = "u802709898_sampl";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$database);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "SELECT * FROM user";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "id: " . $row["user_id"]. " - Name: " . $row["name"]. " <br>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
	?>
</body>
</html>