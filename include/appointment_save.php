<?php
include ('../connection.php');
session_start();
if(!(isset($_SESSION['user'])))
	{
		header("location:../login.php");
	}

#Arrange all given datas

$shift = $_REQUEST['doctor'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$date = $_REQUEST['date'];
$time = $_REQUEST['time'];

if ( strlen($shift) <= 0 || strlen($name) <= 0  || strlen($phone) <= 0 || strlen($date) <= 0 || strlen($time) <= 0) 
{
	echo 0;
}
else
{
	$SQL= "INSERT INTO appoint (p_name,p_phone,a_time,a_date) VALUES ('$name','$phone','$time','$date')";

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