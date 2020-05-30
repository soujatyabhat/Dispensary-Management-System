<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "d_a_s";
	try
	{
		$con = mysqli_connect($server,$user,$password,$database);
		if(!($con)) {throw new Exception("Not");}
	}
	catch(Exception $obj)
	{
		echo "Data has not connected".$obj->getMessage();
	}
?>