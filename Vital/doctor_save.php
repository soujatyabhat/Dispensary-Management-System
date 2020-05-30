<?php
include '../connection.php';
session_start();
if(!(isset($_SESSION['user'])))
{
header("location:../login.php");
}
	if(isset($_POST['submit']))
	{
			$name = $_POST['name'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$specialist = $_POST['specialist'];
			$sql = "insert into doc values('$name','$address','$phone','$specialist','0')";
			$save = mysqli_query($con,$sql);
			if($save){echo "Record has saved"."<br>";}else{echo "Record has not saved";}
	?>
	<br>
			<a href="../doctor_menu.php"> Goto the Previous page </a>
	<?php
	}
?>