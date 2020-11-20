<?php
	include("../connection.php");
	session_start();
	if(!(isset($_SESSION['user'])))
	{
		header("location:../login.php");
	}
	#Delete Process
	$id =  $_REQUEST['id'];
	$sql = "DELETE FROM doc where d_id = '$id'";
	echo mysqli_query($con,$sql)? 1 : 0;
?>