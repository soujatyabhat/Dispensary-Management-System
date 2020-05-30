<html>
	<head> <title> Display Appointment </title> 
	<link rel="stylesheet" type="text/css" href="style\d_appointment.css"> 
	<?php
	include 'connection.php';
	session_start();
	if(!(isset($_SESSION['user'])))
	{
	header("location:login.php");
	}
	?>
	</head>	
	<body>
	<h1 align="center"> Doctor Appointments </h1>
	<hr align = "center" width ="70%">
	<a href = "menu.php"> Goto main menu </a>
	<div>
	<form action="d_appointment.php" method="POST">
	<center>
		<?php
			$sql = "select name from doc";
			$result = mysqli_query($con,$sql);
		?>
		<label style="margin-left:20px;"> Choose Doctor's Name : </label>
		<select name="doctor" required>
		<option> </option>
		<?php 
			while($row = mysqli_fetch_array($result))
			{
		?>
			<option> <?php echo $row['name']?> </option>
		<?php	
			}
		?>	
		</select>
		<label style="margin-left:20px;"> Choose Date : </label> <input type = "date" name = "date" required> 
		<input type="submit" name="send" style="background-color:green;" class="btn">
		<input type="reset" name="reset" style="background-color:red;" class="btn">
		</form>
		</div>
		<div>
		<div>
		<table border="5" align="center" bgcolor="cyan" bordercolor="red" width="1000px">
		<tr align="center">
		<th> Name </th> <th> Phone </th>  <th> Date </th>  <th> Doctor </th> <th> Delete Appointment </th>
		</tr>
		<?php
		if(isset($_POST['send']))
		{
			$date = $_POST['date'];
			$doctor = $_POST['doctor'];
			include('Vital/display.php');
		}
		?>
</body>
</html>