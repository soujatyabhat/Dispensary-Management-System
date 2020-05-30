<html>
<head> <title> About Doctor </title> </head>
<h1 align="center"> Doctor's Detail </h1>
<br>
<hr align = "center" width ="70%">
<body bgcolor="silver">
<table border="5" bgcolor="yellow"  bordercolor="red" align="center" cellspacing="3" cellpadding="3" width="1000px">
	<tr align="center">
		<th> ID </th> <th> Name </th> <th> Address </th> <th> Phone number </th> <th> Specialist </th> <th colspan ="2"> Make Changes </th>
	</tr>
	<?php
		 include "connection.php";
		 session_start();
		 if(!(isset($_SESSION['user'])))
		 {
		 header("location:login.php");
		 }
		 $sql = "select * from doc";
		 $result = mysqli_query($con,$sql);
		 $cont = mysqli_num_rows($result);
		 if($cont == 0)
		 {
	?>
			<tr align="center">
			<td colspan = "6"> No Doctors found </td>
			</tr>
		
		<?php
		 }
		 else
		 {
		 while($row = mysqli_fetch_array($result))
		 {
	?>
			<tr align="center">
				<td> <?php  echo $row['id']?> </td> <td> <?php  echo $row['name']?> </td> <td> <?php  echo $row['phone']?> </td>
				<td> <?php  echo $row['address']?> </td> <td> <?php  echo $row['specialist']?> </td>
				<td colspan ="2">  <a href="Vital/doctor_delete.php?id=<?php echo $row['id']?>"> <button>  Delete  </button> </a>     
			</tr>
	<?php
		 }
		 }
	?>
	</table>
	<br>
</body>
</html>