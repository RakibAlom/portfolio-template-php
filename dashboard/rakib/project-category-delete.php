<?php 
	include 'include/dbcon.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM project_category WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	header('location:project-category.php');
 ?>