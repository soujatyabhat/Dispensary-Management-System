<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type = "text/css" href="style/doctor.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title> Current Doctors</title>
	<style>
	.doctor_show
	{
		border: 2px solid !important;
		border-radius: 10px !important;
		background-color: rgb(239, 241, 75) !important;
		padding: 20px 40px;
	}
	</style>
	<script>
		$(document).ready(function(){
    	$("#submit").click(function(event){
			event.preventDefault();
			a = confirm("Do you want to delete this record?")
			if (a == true)
			{

				$.ajax
				({
					type: "POST",
					url: "include/doctor_delete.php",
					data: $("form").serialize(),
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

			}
			else
			{
					return 0;
			}
    })
})
	</script>
</head>
<body>
	<?php
	require_once 'connection.php';

			#Check Whether user loged in or not
			session_start();
			if(!isset($_SESSION['user']))
			{
				header("location:login.php");
			}
	?>
<br>
<div class = "container">
<?php
      
	  $sql = "SELECT * FROM doc";
	  $result = mysqli_query($con,$sql);
	  $count = mysqli_num_rows($result);

	  if($count > 0)
		{
	  	while($row = mysqli_fetch_assoc($result))
	  	{
?>

		<div class = "doctor_show">
				<b> Name : </b> <?php echo $row['d_name']?>
				<br>
				<b> Specialist in : </b> <?php echo $row['d_specialist']?>
				<br>
				<b> About : </b> <?php echo $row['d_about']?>
				<br>
				<b> Phone Number : </b> <?php echo $row['d_phone']?>
				<br>
				<b> Email ID :  </b> <?php echo $row['d_email']?>
				<br>
				<b> Shift : </b> <?php echo $row['d_shift']?>
				<br>
				<b> Linkedin : </b> <a href = "<?php echo $row['d_social_link']?>">  <?php echo $row['d_social_link']?> </a>
				<br>
				<br>
				<form method="POST">
					<input type = "hidden" name = "id" value = "<?php echo $row['d_id']?>">
					<button class = "btn" id = "submit" style = "background-color: rgb(255, 20, 52); color:white;"> <i class="fa fa-trash-o"></i> Delete </button>
				</form>
				
		</div>
		<br> <br>
  <?php
	  	}
		  mysqli_close($con);
	}
	else
	{
?>
		<center>
			<img src = "icons/sad.png">
			<br>
			<h1 class = "display-3"> No Doctor Appoint Yet </h1>
		</center>
<?php	
	}
	?>
</table>
</div>
<ul> <li> <a href = "dmenu.php"> Doctor Menu </a> </ul> </li>
</body>
</html>