<?php
$id = $_GET['delID'];

include('includes/connection.php');
$con=mysqli_connect("localhost","root","","leak_management");
$sql = "DELETE FROM leaksurvey WHERE id=$id";
if(mysqli_query($con,$sql))
{
	header('location:index.php');
}
else
{
	die('Could not delete record:' .mysqli_error($conn));
}
?>