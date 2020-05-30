<?php
if(!(isset($_SESSION['user'])))
{
header("location:../login.php");
}
$sql = "select * from appointment where doctor = '$doctor' and date = '$date'";
$result = mysqli_query($con,$sql);
$numRows = mysqli_num_rows($result);
if($numRows == 0)
{
?>
<tr align="center">
	<td colspan="5"> No Appointment has to be made </td>
</tr>
<?php
}
else
{
while ($row = mysqli_fetch_array($result))
{
?>
	<tr align="center">
		<td> <?php echo $row['name'] ?> </td> <td> <?php echo $row['phone'] ?> </td> <td> <?php echo $row['date'] ?> </td> <td> <?php echo $row['doctor'] ?> </td> 
		<td> <a href="Vital/delete_doctor.php?time=<?php echo $row['time']?>"> <button>   Delete  </button> </a> </td>
	</tr>
<?php
}
}
?>
</table>
</div>
<ul>
	<li> <a href="menu.php"> Go to the menu  </a> </li>
</ul>