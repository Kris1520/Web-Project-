<?php 
include '../inc/db.php';
date_default_timezone_set('UTC');
session_start();
if (!isset($_SESSION['admin'])) {
 header('location:../index.php');
 exit;
}
if(isset($_GET["id"]) && !empty($_GET["id"])){
	$sql = "DELETE FROM polls WHERE id = ".$_GET["id"];
	$result = mysqli_query($conn,$sql);
	if ($result == true)
		{
			header("location:/admin/polls.php");
		}
		else
		{
			$SESSION['error'] = "please try again";
			header("location:/admin/polls.php");
			
		}
}
?>