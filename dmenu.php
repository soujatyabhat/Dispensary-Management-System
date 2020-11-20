<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Doctor Menu </title>
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
			padding: 40px;
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
	</div>
	<div class = "container" style = "margin-top:80px;">
		<div class = "row">
			<div class = "col-lg-3" style = "margin-left:30%;"> <a href = "doctor_add.php"> <img src = "icons/consulting.png" width="150px" height = "150px" title = "Add New Doctor"> </a></div> 
			<div class = "col-lg-3"> <a href = "doctor_show.php"> <img src = "icons/doctor.png" width="150px" height = "150px" title = "Show all records of exsisting doctors"> </a> </div> 
		</div>
	</div>
<ul> <li> <a href = "menu.php"> Main Menu </a> </li> </ul>
</body>
</html>