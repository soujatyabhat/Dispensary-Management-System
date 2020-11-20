<?php
include ('../connection.php');
session_start();
if(!(isset($_SESSION['user'])))
	{
		header("location:../login.php");
	}

#Arrange all given datas
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];

$name = $fname .  " " . $lname;
$speacial = $_REQUEST['speacial'];
$phone = $_REQUEST['phone'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];
$about = $_REQUEST['about'];
$link = $_REQUEST['link'];
$shift = $_REQUEST['shift'];

$id = md5($email);
if ( strlen($name) <= 0 || strlen($speacial) <= 0  || strlen($phone) <= 0 || strlen($about) <= 0 || strlen($link) <= 0) 
{
	echo 0;
}
else
{
	$SQL= "INSERT INTO doc (d_id,d_name,d_address,d_about,d_specialist,d_phone,d_email,d_shift,d_social_link) 
	VALUES ('$id','$name','$address','$about','$speacial','$phone','$email','$shift','$link')";

	if(mysqli_query($con,$SQL))
		{
			//move_uploaded_file($from,$to);
			echo 1;
		}
	else
		{
			echo 0;
		}

}

?>