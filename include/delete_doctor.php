<?php
	include "../connection.php";
	session_start();
	if(!(isset($_SESSION['user'])))
	{
		header("location:../login.php");
	}
	$time =  $_GET['time'];
	$sql = "DELETE FROM appointment WHERE time = '$time'";
	$result = mysqli_query($con,$sql);
	if($result)
	{
		echo "Data has deleted"."<br> <br>";
	?>
	<a href = "../d_appointment.php"> Goto Previous Page </a>
	<?php	
	}
	?>