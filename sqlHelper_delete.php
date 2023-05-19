<?php

	include("connection.php");

if(isset($_GET['id'])){

	$sql = "DELETE FROM `tbl_members` WHERE `id` = ".$_GET['id'];

try {
	$connection->query($sql);
  echo "New record created successfully";
  header("Location: members.php");
	die();
}catch(Exception $e){

  header("Location: members.php");
	die();
}
	}
?>