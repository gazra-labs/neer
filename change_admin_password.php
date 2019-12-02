<?php
    //$adminID = $_GET['aUN'];
   include('includes/connection.php');
    $con=mysqli_connect("localhost","root","","leak_management");
	$sql ="SELECT * FROM tbladministrator where user = 'Administrator'";
	$results = mysqli_query($con,$sql);
   
 //   while($row = mysqli_fetch_assoc($result)) {
	// 	$password = $row["pass"];
		
	// }
?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread();
?>
<div class="page-wrapper">
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Change Password</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_password.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="password" placeholder="Password"
								  value="<?php echo $password; ?>">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdateAdmin()" class="btn btn-primary">Save Changes</button>
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<div>
<?php
	get_footer();
?>	
</body>
</html>	
