<?php
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];
$email = $_POST['txtemail'];
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$cpw = $_POST['txtconfirmpassword'];
$ur = $_POST['txtrole'];

if($ur == "Admin"){
    $roleid = 1;
}
elseif($ur == "Surveyour"){
    $roleid = 2;
}
elseif($ur == "Tester"){
    $roleid = 3;
} 
else{
	$roleid = 0;
    echo "Have a nice day!";
}

include('includes/connection.php');
$con=mysqli_connect("localhost","root","","neerqualtie");


$sql = "INSERT INTO user_master VALUES(NULL,'$fn','$ln','$email','$un','$pw','$cpw','$ur','Active','$roleid')";

if (mysqli_query($con,$sql))
{
	header('location:users.php');
}
else
{
	die('Unable to insert data:' .mysqli_error($conn));
}

?>