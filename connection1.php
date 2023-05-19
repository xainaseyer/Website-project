<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db_name = "upraxis_gl_db";
	$conn = new mysqli_connect($servername, $username, $password, $db_name, 3307);
	if ($conn->connect_error) {
		die("Connection failed".$conn->connect_error);
	}
	echo "Connection Successful";
?>