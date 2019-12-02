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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Assign Role</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-vertical" method="post" action="update_userrole.php">
						<div class="card-body">
						
                                    <label class="col-md-3 m-t-15">Select User</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 60%; height:46px;">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
											 </select>
                                    </div>
									
									<label class="col-md-3 m-t-15">Select Role</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 60%; height:46px;">
                                            <option>Select Role</option>
                                            <optgroup label="Select User Role">
                                                <option value="Admin">Admin</option>
                                                <option value="Surveyour">Surveyour</option>
												 <option value="Tester">Tester</option>
                                            </optgroup>
											 </select>
                                    </div>
                              
							
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Assign Role</button>
							  </div>
						</form>
						</div>
					
					</div>
			</div>
	</div>
<?php
	get_footer();
?>		
</body>
</html>