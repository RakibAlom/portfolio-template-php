<?php

	include 'include/dbcon.php'; 
	$id = $_GET['id'];
	$sql = "SELECT * FROM clients WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
	unlink('img/client/'.$result['image']);


	$sql2 = "DELETE FROM clients WHERE id = '$id'";
	$run2 = mysqli_query($con,$sql2);
	header('location:client-comment.php');
 ?> 