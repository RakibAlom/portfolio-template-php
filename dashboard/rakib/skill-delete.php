<?php

	include 'include/dbcon.php'; 
	$id = $_GET['id'];
	$sql = "SELECT * FROM skills WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
	unlink('img/skill/'.$result['logo']);

	$sql2 = "DELETE FROM skills WHERE id = '$id'";
	$run2 = mysqli_query($con,$sql2);
	header('location:skill.php');
 ?>