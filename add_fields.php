<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	
?>
<div class="page-wrapper">
<?php get_bread_three(); ?>
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
						<form class="form-vertical" method="post" action="add_fieldsdata.php">
						<div class="card-body">
						
                                    <label class="col-md-3 m-t-15">Select Survey Type</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="txttype" style="width: 60%; height:42px;">
                                            <option>Select Field Type</option>
                                             <option value="Field">Field Survey</option>
                                                <option value="Internal">Internal Lab</option>
												 <option value="External">External Lab</option>
                                           
											 </select>
                                    </div>
									
									<label class="col-md-3 m-t-15">Field Name</label>
                                   <div class="controls">
								  <input class="input-xlarge focused" style="width: 50%; height:30px;" name="txtfieldname" id="focusedInput" type="text" placeholder="Enter Field Name">
								</div>
								
								<label class="col-md-3 m-t-15" >Acceptable Limit</label>
                                   <div class="controls">
								  <input class="input-xlarge focused" style="width: 50%; height:30px;" name="txtaccept" id="focusedInput" type="text" placeholder="Enter Acceptable Limit">
								</div>
								
								<label class="col-md-3 m-t-15">Premissible Limit</label>
                                   <div class="controls">
								  <input class="input-xlarge focused" style="width: 50%; height:32px;" name="txtpremiss" id="focusedInput" type="text" placeholder="Enter Permissible Limit">
								</div>
                              
							
							  <div class="form-actions">
								<button type="submit" onclick="return addField()" class="btn btn-primary">Add Field</button>
							  </div>
						</form>
						</div>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
</div>
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->