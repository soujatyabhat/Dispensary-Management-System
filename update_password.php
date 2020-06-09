<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
$o_password = $_POST['o_password'];
$n_password = $_POST['n_password'];
$sql = "select *from admin";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
if($row['password'] == $o_password)
	{
		$name = $row['name'];
		$u_sql = "update admin set password = '$n_password' where name = '$name'";
		$save = mysqli_query($con,$u_sql);
			if($save)
			{
				echo "<script> alert('Password has changed') </script>";
				echo "<script> location.href = 'login.php' </script>";
			}
	}
else
	{
		echo "<script> alert('Password has incorrect') </script>";
	}
}
?>
<html>
<head> <title> Update Password </title> </head>
<script>
function check ()
{
	if(np.value == cp.value)
		return true;
	else
		{
			alert('Confirm password and new password not matched');
			cp.value = np.value = "";
			return false;
		}
}
</script>
<body bgcolor = "pink">
	<h1 align="center">  ABC Doctor' Clinic </h1>
	<p align="center"> Address : E/11 Atabugan(west) Boral Main Road Kolkata : 700084 </p>
	<hr width="75%" size="3">
<form action = "update_password.php" method = "POST" onsubmit = "return check()">
<br>
<h3 align="center"> <u> Change Password </u> </h3>
<center>
	<label> Enter old password  : </label> <input type="password" name = "o_password" id = "op" required>
	<br>
	<br>
	<label> Enter new password  : </label> <input type="password" name = "n_password" id = "np" minlength="8" placeholder ="password should have minimum 8 character" onblur = "chr()" required>
	<br>
	<br>
	<label> Enter confirm password  : </label> <input type="password" name = "c_password" id = "cp"  minlength="8" required>
	<br>
	<br>
<input type="submit" value = "Change" name = "submit"> <input type = "reset"  value ="Reset">
<br>
<br>
</center>
<br>
<a href = "login.php"> <ul> <li> Goto Login Page </li> </ol> </a>
<hr width="75%" size="3">
</form>