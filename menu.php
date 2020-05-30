<html>
	<link rel="stylesheet" type="text/css" href="style\menu.css">
	<head> <title> Menu </title> </head>
	<body>
	<h1 align="center">  ABC Doctor's Clinic </h1>
	<br>
	<?php
	session_start();
	if(!(isset($_SESSION['user'])))
	{
		header("location:login.php");
	}
	else
	{
		include("Vital/ses_time.php");
	}
	?>
	<hr>
	<p align="center"> <u> Main Menu </u> </p>
	<br>
	<ul>
		<li> <a href="c_appointment.php"> Create Appointment </a> </li>
		<li> <a href="d_appointment.php"> Show Appointments </a> </li>
		<li> <a href="doctor_menu.php">  Doctor's Segment </a> </li>
	</ul>
	</body>
</html>