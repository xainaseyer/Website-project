<?php

	include("connection.php");

	session_start();

if(isset($_GET['name'], $_GET['role'], $_GET['id'])){

$sql = "UPDATE `tbl_members` SET `name`='".$_GET['name']."',`role`='".$_GET['role']."',`id`=".$_GET['id']." WHERE `id` = ".$_SESSION['user'].";";

try {
	$connection->query($sql);
  echo "New record created successfully";
  header("Location: members.php");
	die();
$connection->close();
}catch(Exception $e){
echo $e;
echo "failed";
}
	}
?>