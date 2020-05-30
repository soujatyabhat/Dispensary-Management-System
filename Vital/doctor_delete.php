<?php
	include("../connection.php");
	session_start();
	if(!(isset($_SESSION['user'])))
	{
		header("location:../login.php");
	}
	$id =  $_GET['id'];
	$sql = "delete from doc where id = '$id'";
	$result = mysqli_query($con,$sql);
	header('location:../doctor_show.php');
?>