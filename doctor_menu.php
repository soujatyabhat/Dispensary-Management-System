<html>	
	<head> <title> Doctor </title> </head>
	<body bgcolor="cyan">
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
	<p align="center"> <u> Doctor Menu </u> </p>
	<ul>
		<li> <a href="doctor.php"> Add New Doctor </a>
		<li> <a href="doctor_show.php"> Show Current Doctors</a>
		<li> <a href="menu.php"> Goto main menu</a>
	</ul>
	</center>
	</body>
</html>