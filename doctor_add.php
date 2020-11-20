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
            	url: "include/doctor_save.php",
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
								 swal("Allash!", "Data has not saved!", "error");
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
		<p class="h1 display-4 mb-4">Add New Doctor </p>

			<hr>

<div class="form-row mb-4">
	<div class="col">
		<!-- First name -->
		<input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name = "fname">
	</div>
	<div class="col">
		<!-- Last name -->
		<input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name = "lname"> 
	</div>
</div>


<!-- Specialist-->
<input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Specialist" aria-describedby="defaultRegisterFormPhoneHelpBlock" name = "speacial">

<br>

<!-- Phone -->
<input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Phone" name = "phone">

<!-- address-->
<input type="text" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Home Address" name = "address">


<!-- E-mail -->
<input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name = "email">

<!-- About  -->
<textarea cols = "20" rows = "3"  class="form-control mb-4" placeholder="About" name = "about"></textarea>

<!-- Social link -->
<input type="url" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Linkedin Link" name = "link">

<!-- Choose Shift -->
<select id="defaultRegisterFormEmail" class="form-control sm-4" name = "shift">
	<option value="" disabled selected> Checkup Shift  </option>
	<option> Morning </option>
	<option> Evening </option>
</select>

<br>
<!-- Sign up button -->
<button class="btn" type = "submit" class="btn" id = "submit"> <i class="fa fa-save"></i> Submit </button>
<button class="btn" type="reset"  style = "background-color: rgb(255, 20, 52)"><i class="fa fa-trash-o"></i> Clear </button>
<br>
<ul style = "float:left;"> <li> <a href = "dmenu.php"> Doctor Menu </a> </li> </ul>
<br>
<hr>
</form>
</div>
</body>
</html>