<?php 
	include 'include/dbcon.php';
	$id = $_GET['id'];

	$sql = "DELETE FROM subscribers WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	header('location:subscribers.php');
 ?>