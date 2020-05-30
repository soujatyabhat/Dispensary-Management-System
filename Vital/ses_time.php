<?php
		if(isset($_POST['Logout']))
		{
			session_unset();
			session_destroy();
			header('location:login.php');
		}
?>
	<body>
	<p align="ceneter">
	<form action = "menu.php" method = "POST">
		<p align ="right"> <b> User Name : </b> <?php echo $_SESSION['user']; ?>  <input type = "submit" name="Logout" value="Logout">
	</form>