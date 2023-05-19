<?php
session_start();
if (isset($_SESSION['logged_in']) == true) {
	header("Location: dashboard.php");
}
if (isset($_POST['submit'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	if ($user=="upraxis" && $pass=="hermanas123") {
		$_SESSION['logged_in'] = true;
		header("Location: dashboard.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<body>
	<div id="form" align="center">
		<h1>Login Form</h1>
		<form name="form" method="POST">
			<label>Username</label>
			<input type="text" id="user" name="user" placeholder="enter your Username"><br><br>
			<label>Password</label>
			<input type="Password" id="pass" name="pass" placeholder="enter your Password"><br><br>
			<input type="submit" id="btn" value="Login" name="submit">
		</form>
		
	</div>
</body>