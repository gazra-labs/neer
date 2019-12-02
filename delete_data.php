<?php
$id = $_GET['delID'];

include('includes/connection.php');
$con=mysqli_connect("localhost","root","","leak_management");
$sql = "DELETE FROM tblUsers WHERE id=$id";
if(mysqli_query($con,$sql))
{
	header('location:users.php');
}
else
{
	die('Could not delete record:' .mysqli_error($conn));
}
?>