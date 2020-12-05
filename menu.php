<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Menu </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type = "text/css" href="style/doctor.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
	.doctor_menu_banner
		{
			background-color: rgb(39, 39, 35) !important;
			font-size: 20px;
			color:white;
			padding: 35px 20px;
		}	
	.image:hover
		{
			box-shadow: 0 0 2px 2px black;
			padding:10px;
			transform: 3s;
		}
	</style>
</head>
<body>
<?php
		 session_start();
		 if (!isset($_SESSION['user']))
		 {
				header("location:login.php");
		 }
?>
	<div class = "container-fluid doctor_menu_banner">
		<h2 class = "display-4"> <?php echo $_SESSION['clinic_name']?> </h2>
		<p style = "text-indent:10px; font-size:16px;"> <?php echo $_SESSION['address']?> </p>
		<a href = "logout.php"> <img src = "icons/logout.png"  style = "float:right; margin-bottom:100px !important;" width = "30px" height = "30px" title = "Logout"></a>
	</div>
	<div class = "container" style = "margin-top:80px;">
		<div class = "row">
			<div class = "col-lg-3 col-md-1 col-sm-2" style = "margin-left:18%;"> <a href = "appoinment_create.php"> <img src = "icons/appointment.png" width="150px" height = "150px" title = "New Appointment" class = "image"> </a></div> 
			<div class = "col-lg-3 col-md-1 col-sm-2" > <a href = "appointment_show.php"> <img src = "icons/stethoscope.png" width="150px" height = "150px" title = "Display all records of exsisting appointment" class = "image"> </a> </div> 
			<div class = "col-lg-3 col-md-1 col-sm-2"> <a href = "dmenu.php"> <img src = "icons/doctor_in_menu.png" width="150px" height = "150px" title = "Doctor's Segment" class = "image"> </a> </div> 
		</div>
		<div class = "row">
			<div class = "col-lg-3 col-md-1 col-sm-2" style = "margin-left:17%;"> <p> Create Appointments </p> </div> 
			<div class = "col-lg-3 col-md-1 col-sm-2"  style = "margin-left:1%;">  <p> Show Appointments </p> </div> 
			<div class = "col-lg-3 col-md-1 col-sm-2"  style = "margin-left:2%;">  <p> Doctor Details </p> </div> 
		</div>
	</div>
	<footer class="footer" style = "background-color: rgb(39, 39, 35); margin-top:9%; padding: 18px 12px">
      <div class="container">
        <span class="text-white"> Made with ❤ By Soujatya Bhattachary </span>
      </div>
    </footer>
</body>
</html>