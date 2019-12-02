<?php
$userID = $_GET['uID'];

	include('includes/connection.php');
    $con=mysqli_connect("localhost","root","","leak_management");
	$sql ="SELECT * FROM tblusers where id = '$userID'";
	$result = mysqli_query($con,$sql);

	$num = mysqli_num_rows($result);

	$i = 0;

	//while ($i < $num)
	while($row = mysqli_fetch_assoc($result)) {
		$autoid = $row["id"];
		$user = $row["Username"];
		$pass = $row["Password"];
		$fn = $row["Firstname"];
		$ln = $row["Lastname"];
		$email = $row["Email"];
		//$i++;
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_four();
?>
<div class="page-wrapper">
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update User's Data</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_data.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtusername" id="focusedInput" type="text" placeholder="Username" 
								  value="<?php echo $user; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="password" placeholder="Password"
								  value="<?php echo $pass; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Firstname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfirstname" id="focusedInput" type="text" placeholder="Firstname"
								  value="<?php echo $fn; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Lastname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtlastname" id="focusedInput" type="text" placeholder="Lastname"
								  value="<?php echo $ln; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtemail" id="focusedInput" type="text" placeholder="Email"
								  value="<?php echo $email; ?>">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Save Changes</button>
								<input type="hidden" name="hid" value="<?php echo $autoid; ?>">
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
</div>
<?php
	get_footer();
?>	

</body>
</html>