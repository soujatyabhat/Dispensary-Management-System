<html>
	<head> <title> Create Appointment </title> 
	<link rel="stylesheet" type="text/css" href="style\c_appointment.css"> 
	</head>
	<?php
		include 'connection.php';
		session_start();
		if(!(isset($_SESSION['user'])))
		{
		header("location:login.php");
		}
	?>
	<body>
	<h1 align="center"> Make Appointment </h1>
	<hr align = "center" width ="70%">
	<form action="Vital/save.php" method="POST" width="1000px">
		<?php
			$sql = "select name from doc";
			$result = mysqli_query($con,$sql);
		?>
		<label style="margin-left:20px;"> Choose Doctor's Name : </label>
		<select name="doctor" required>
		<?php 
			while($row = mysqli_fetch_array($result))
			{
		?>
			<option> <?php echo $row['name']?> </option>
		<?php	
			}
		?>
		</select>
		<label style="margin-left:10px;"> Choose Date : </label> <input type = "date" name = "date" required>
		<label style="margin-left:20px;"> Name  : </label> <input type = "text" name="name" required> 
		<label style="margin-left:20px;"> Phone : </label> <input type = "number" name="phone" required> 
		<center>
		<input type="submit" name="send" style="background-color:green;" class="btn">
		<input type="reset" name="reset" style="background-color:red;" class="btn">
		</center>
		</form>
		<br>
		<ul> <li> <a href ="menu.php"> Goto main menu </a> </li> </ul>
	</body>
</html>