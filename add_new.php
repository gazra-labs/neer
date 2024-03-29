<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_three();
?>
<div class="page-wrapper">
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New User</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-vertical" method="post" action="save_userdata.php">
						
							<fieldset>
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Firstname *</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfirstname" id="focusedInput" type="text" placeholder="Firstname">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Lastname</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtlastname" id="focusedInput" type="text" placeholder="Lastname">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email *</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtemail" id="focusedInput" type="text" placeholder="Email">
								</div>
							  </div>
							
							
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Username *</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtusername" id="focusedInput" type="text" placeholder="Username">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password *</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="password" placeholder="Password">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Confirm Password *</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtconfirmpassword" id="focusedInput" type="password" placeholder="Password">
								</div>
							  </div>
							  <label class="col-md-3 m-t-15">Select Role *</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="txtrole" style="width: 50%; height:36px;">
                                            <option>Select Role</option>
                                            <optgroup label="User Role">
                                                <option value="Admin">Admin</option>
                                                <option value="Surveyour">Surveyour</option>
												<option value="Tester">Tester</option>
                                            </optgroup>
											 </select>
                                    </div>
                                </div>
							 
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add User</button>
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