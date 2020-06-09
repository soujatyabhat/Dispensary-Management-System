<html>
	<head> <title> DMS </title> </head>
	<?php
	include 'connection.php';
	if(isset($_SESSION['user']))
	{
		header("location:menu.php");
	}
	else
	{
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$password = $_POST['password'];
			$sql = "select * from admin";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_assoc($result);
			$c_name = $row['name'];
			$c_password = $row['password'];
			if(($name == $c_name) and ($password == $c_password))
				{
					session_start();
					$_SESSION['user'] = $name;
					echo "<script> location.href = 'menu.php'</script>";
				}
			else
				{
					echo "<script> alert('Username or password is incurrect'); </script>";
				}
		}
	}
	?>
	<body bgcolor="pink">
	<center>
	<form action="login.php" method="POST">
	<h1 align="center">  ABC Doctor' Clinic </h1>
	<p align="center"> Address : E/11 Atabugan(west) Boral Main Road Kolkata : 700084 </p>
	<hr width="75%" size="3">
	<br>
	<h3 align="center"> <u> Login </u> </h3>
		<label> User Name : </label> <input type = "text" name="name" required>
		<br>
		<br>
		<label> Password : </label> <input type="password" name="password" required>
		<br>
		<br>
	<input type="submit" name="submit" name="Login" value = "Login"> <input type="reset" name = "Reset" value ="Reset">
	</form>
	</center>
		<a href = "update_password.php"> <ul> <li> Change Password </li> </ol> </a>
	<br>
	<hr width="75%" size="3">
	</body>
</html>