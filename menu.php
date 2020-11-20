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
			padding: 50px;
		}	
	img:hover
		{
			box-shadow: 0 0 2px 2px black;
			padding:10px;
			transform: 3s;
		}
	</style>
</head>
<body>
	<div class = "container-fluid doctor_menu_banner">
		<h2 class = "display-4"> <?php session_start(); echo $_SESSION['clinic_name']?> </h2>
		<p style = "text-indent:10px; font-size:16px;"> <?php echo $_SESSION['address']?> </p>
		<a href = "logout.php"> <img src = "icons/logout.png"  style = "float:right; margin-bottom:90px !important;" width = "50px" title = "Logout"></a>
	</div>
	<div class = "container" style = "margin-top:80px;">
		<div class = "row">
			<div class = "col-lg-3" style = "margin-left:18%;"> <a href = "#"> <img src = "icons/appointment.png" width="150px" height = "150px" title = "New Appointment"> </a></div> 
			<div class = "col-lg-3"> <a href = "#"> <img src = "icons/stethoscope.png" width="150px" height = "150px" title = "Display all records of exsisting appointment"> </a> </div> 
			<div class = "col-lg-3"> <a href = "dmenu.php"> <img src = "icons/doctor_in_menu.png" width="150px" height = "150px" title = "Doctor's Segment"> </a> </div> 
		</div>
	</div>
</body>
</html>