<?php
	include "../connection.php";
	if(!(isset($_SESSION['user'])))
	{
	header("location:login.php");
	}
	$time =  $_GET['time'];
	$sql = "delete from appointment where time = '$time'";
	$result = mysqli_query($con,$sql);
	if(!($result))
	{
		echo "data has deleted";
	}
	header('location:../d_appointment.php');
?>