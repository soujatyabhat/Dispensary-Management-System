<?php
	include "../connection.php";
	session_start();
	if(!(isset($_SESSION['user'])))
	{
		header("location:../login.php");
	}
	$id =  $_REQUEST['id'];
	$sql = "DELETE FROM appoint WHERE a_id = '$id'";
	$result = mysqli_query($con,$sql);

	if($result)
		echo "1";
	else
		echo "0";
?>
