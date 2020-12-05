<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Add New Doctor</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type = "text/css" href="style/doctor.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		$(document).ready(function(){
    	$("#submit").click(function(event){
			event.preventDefault();
        	$.ajax({
            	type: "POST",
            	url: "include/appointment_save.php",
            	data: $("#doctor").serialize(),
            	success: function(result)
            	{
					if (result == 1)
						{
							   swal("Good job!", "Data has saved!", "success");
							   location.reload();
						}
					   
				   else
				  	    {
								 swal("Alash!", "Data has not saved!", "error");
						}
            	}
        })
    })
})
	</script>
</head>
<body>

<!--Body-->

<div class = "container">
	<form class="text-center border border-light p-5" id = "doctor" method = "POST" enctype = "multipart/form-data">
		<p class="h1 display-4 mb-4"> Add New Appointment </p>

			<hr>

<div class="form-row mb-4">
	<div class="col">
		<!-- Choose Shift -->
		<select id="defaultRegisterFormEmail" class="form-control sm-4" name = "doctor">
			<option value="" disabled selected> Checkup Shift  </option>
			<?php
					require_once 'connection.php';
					
					$sql = "SELECT * FROM doc";
					$result = mysqli_query($con,$sql);
					
					while($row = mysqli_fetch_assoc($result))
					{
			?>
						<option> <?php echo $row['d_name']?> </option>
			<?php
					}
			?>
		</select>
	</div>
	<div class="col">
		<!-- Last name -->
		<input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Name" name = "name"> 
	</div>
</div>

<div class="form-row mb-4">
	<div class="col">
		<input type="number" id="defaultRegisterFormLastName" class="form-control" placeholder="Phone Number" name = "phone"> 
	</div>
	<div class="col">
		<!-- Last name -->
		<input type="date" id="defaultRegisterFormLastName" class="form-control" placeholder="Date" name = "date"> 
	</div>
	<div class="col">
		<!-- Last name -->
		<input type="time" id="defaultRegisterFormLastName" class="form-control" placeholder="Date" name = "time"> 
	</div>
</div>


<br>
<!-- Sign up button -->
<button class="btn" type = "submit" class="btn" id = "submit"> <i class="fa fa-save"></i> Submit </button>
<button class="btn" type="reset"  style = "background-color: rgb(255, 20, 52)"><i class="fa fa-trash-o"></i> Clear </button>
<br>
<ul style = "float:left;"> <li> <a href = "menu.php"> Main Menu </a> </li> </ul>
<br>
<hr>
</form>
</div>
</body>
</html>