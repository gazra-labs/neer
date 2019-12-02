<?php
$autoid = $_POST['hid'];
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];
$email = $_POST['txtemail'];

include('includes/connection.php');
$con=mysqli_connect("localhost","root","","leak_management");
$sql = "UPDATE tblusers SET Username='$un', Password='$pw', Firstname='$fn', Lastname='$ln', Email='$email' WHERE id='$autoid'";

if(mysqli_query($con,$sql))
{
	header('location:users.php');
}
else
{
	die('Unable to update record: ' .mysqli_error($conn));
}
?>