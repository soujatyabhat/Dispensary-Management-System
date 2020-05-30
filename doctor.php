<html>
	<head> <title> New Doctor Re </title> 
	<link rel="stylesheet" type="text/css" href="style\doctor.css"> 
	<?php
		session_start();
		if(!(isset($_SESSION['user'])))
		{
		header("location:login.php");
		}
	?>
	</head>
	<body>
	<h1 align="center"> Make Doctor's Details </h1>
	<hr align = "center" width ="70%">
	<form action="Vital/doctor_save.php" method="POST">
		<label style="margin-left:10px;"> Name  : </label> <input type = "text" name="name" required> 
		<label style="margin-left:10px;"> Address  : </label> <input type = "text" name="address" required> 
		<label style="margin-left:10px;"> Phone Number:  : </label> <input type = "number" name="phone" required> 
		<label style="margin-left:10px;"> Specialist  : </label> <input type = "text" name="specialist" required> 
		<center>
		<input type="submit" name="submit" style="background-color:green;" class="btn">
		<input type="reset" name="reset" style="background-color:red;" class="btn">
		</center>
		</form>
		<ul> <li> <a href="doctor_menu.php"> Goto Doctor Menu Page </a> </li> </ul>
	</body>
</html>