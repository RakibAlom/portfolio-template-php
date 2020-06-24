<?php 
	include 'include/dbcon.php';
	$id = $_GET['id'];

	$sql = "SELECT * FROM project WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
	if($result['image']) {
		unlink('img/project/'.$result['image']);
	}

	$sql2 = "DELETE FROM project WHERE id = '$id'";
	$run2 = mysqli_query($con,$sql2);
	header('location:project.php');
 ?>