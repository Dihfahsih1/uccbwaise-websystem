<?php session_start();
include('include/dbconn.php');
if(isset($_POST['delete'])){
	$id = $_POST['id'];
	$sql= ("DELETE from ucctbl WHERE id = '$id'") or die (mysqli_error());
	$result=mysqli_query($con, $sql);
	header("location:update_cnp.php");
	
	}?>