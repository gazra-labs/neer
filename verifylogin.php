<?php
 $un = $_POST['username'];
$pwd = $_POST['password'];

include 'includes/connection.php';

$sql = "SELECT * FROM user_master WHERE username = '$un' AND userpassword='$pwd'";
$result =mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);


if($pwd=="admin")
{
  session_start();
  $_SESSION['pwd'] = $pwd;
  header('location:index.php');
}
else
{
  session_start();
  $_SESSION['msg'] = '<h2>Invalid username or password!</h2>';
  header('location:login.php');
}

function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}




?>
