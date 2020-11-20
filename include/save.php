<?php
		include '../connection.php';
		session_start();
		if(!(isset($_SESSION['user'])))
		{
		header("location:login.php");
		}
			if(isset($_POST['send']))
			{
				$doctor = $_POST['doctor'];
				$date = $_POST['date'];
				$name = $_POST['name'];
				$phone = $_POST['phone'];
				date_default_timezone_set("Asia/Kolkata");
				$time = date("h:i:s A");
				$sql = "insert into appointment values('$name','$phone','$date','$doctor','$time')";
				$save = mysqli_query($con,$sql);
				if($save)
				{
		?>
					<p> Appointment Fixed </p>
		<?php
				}
			}
		?>
<html> 
	<head> <title> Fixed </title> </head>
	<a href="../menu.php"> Goto Menu Page </a>
</html>
	