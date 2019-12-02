<?php
$st = $_POST['txttype'];
$fn = $_POST['txtfieldname'];
$al = $_POST['txtaccept'];
$pl = $_POST['txtpremiss'];


include('includes/connection.php');
$con=mysqli_connect("localhost","root","","neerqualtie");


$sql = "INSERT INTO fields_master VALUES(NULL,'$st','$fn','$al','$pl')";

if (mysqli_query($con,$sql))
{
	header('location:users.php');
}
else
{
	die('Unable to insert data:' .mysqli_error($conn));
}

?>