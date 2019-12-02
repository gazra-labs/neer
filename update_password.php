<?php
// $AdminAutoId = $_POST['uAid'];
$pw = $_POST['txtpassword'];

include('includes/connection.php');
$con=mysqli_connect("localhost","root","","leak_management");
$sql = "UPDATE tbladministrator SET pass='$pw' WHERE id='1'";

if(mysqli_query($con,$sql))
{
	header('location:logout.php');
}
else
{
	die('Unable to update record: ' .mysqli_error($conn));
}
?>