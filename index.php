<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script>
	update = 0;
	function run()
	{
    timer = setInterval(ht,50);	
	}
	function ht()
	{
    var range = ++update +"%";
    para.innerHTML = "Loading...     " + range;
    line.width = range;
	if(update === 100)
	{
	clearInterval(timer);
	window.location.href = "login.php";
	}
}
</script>
    <title>Home</title>
	<style>
	body{
		padding-top:60px;
		background-color:pink;
	}
	h1{
		font-size: 30pt;
		font-family: Lucida Sans Typewriter;
		color:blue;
		word-spacing: 3px;
	}
	#line
	{
	height:40px;
	}
	.reset
	{
		
		margin-top:100px;
	}
	.pro
	{

		background-color:rgba(150, 145, 145, 0.938);
	}
 </style>
    
    <script src="index.js">
    </script>
</head>
<body onload="run()">
<h1 align="center" > <span style="color:green;"> Welcome  to  </span> Dispensary Management System</h1>
<br>
<p align="center"> <b> Powered By: </b>  ABC Doctor's Clinic</p>
<p align="center"> <b> Developed: </b> Soujatya Bhattacharya </p>
<div class="reset"></div>
<p id="para"> 0% </p>
	<div class="pro">
<hr size="5" color="green" width="0px" align="left" id="line"> 	
	</div>
</body>
</html>