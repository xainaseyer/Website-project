<?php

	include("connection.php");

if(isset($_GET['name'], $_GET['role'], $_GET['id'])){

$sql = "INSERT INTO `tbl_members`(`name`, `role`, `id`) VALUES ('".$_GET['name']."','".$_GET['role']."','".$_GET['id']."');";

try {
	$connection->query($sql);
  echo "New record created successfully";
  header("Location: members.php");
	die();
$connection->close();
}catch(Exception $e){

  header("Location: members.php");
	die();
}
	}
?>