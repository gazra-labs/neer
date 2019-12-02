<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_six();
?>
<div class="page-wrapper">
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New Survey</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" method="post" action="save_survey_data.php">
					<fieldset>
						<!-- added new -->

						<!-- end new -->

						<div class="control-group">
						<label class="control-label" for="focusedInput">Zone:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtzone" id="focusedInput" type="text" placeholder="Zone">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Service Reservoir Name:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtreservoir" id="focusedInput" type="text" placeholder="Service Reservoir Name">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">DMA Name:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtdma" id="focusedInput" type="text" placeholder="DMA Name">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Address/ Street Name:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtaddress" id="focusedInput" type="text" placeholder="Address/ Street Name">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Nearest Landmark:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtnearest" id="focusedInput" type="text" placeholder="Nearest Landmark">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Lattitude /Longitude:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtlatlng" id="focusedInput" type="text" placeholder="Lattitude /Longitude">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Engineer Name:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtengineer" id="focusedInput" type="text" placeholder="Engineer Name">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Rectified Date:</label>
						<div class="controls">

							<!-- id="date" name="date" placeholder="MM/DD/YYY" -->
							<input  class="datepicker" name="txtrectifieddate" id="date" type="text" placeholder="MM/DD/YYY" >
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Rectified Time:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtrectifiedtime" id="focusedInput" type="text" placeholder="Rectified Time">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Leak\Registration Number:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtleaknumber" id="focusedInput" type="text" placeholder="Leak\Registration Number">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Complaint Date:</label>
						<div class="controls">
							<!--  <input class="input-xlarge focused" name="txtcomplaintdate" id="focusedInput" type="text" placeholder="Complaint Date"> -->
							<input  class="input-xlarge focused" name="txtcomplaintdate" id="date" type="text" placeholder="MM/DD/YYY" >
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Complaint Time:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtcomplainttime" id="focusedInput" type="text" placeholder="Complaint Time">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Size of Pit:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtsizeofpit" id="focusedInput" type="text" placeholder="Size of Pit">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Road Type:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtroadtype" id="focusedInput" type="text" placeholder="Road Type">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Asphalt thick:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtasphaltthick" id="focusedInput" type="text" placeholder="Asphalt thick">
						</div>
						</div>

						<div class="control-group">
						<label class="control-label" for="focusedInput">Concrete Thick:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="concretethick" id="focusedInput" type="text" placeholder="Concrete Thick">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Macadam:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtmacadam" id="focusedInput" type="text" placeholder="Macadam">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Leakage Quantity:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtleakagequantity" id="focusedInput" type="text" placeholder="Leakage Quantity">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Supply Timings:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtsupplytimings" id="focusedInput" type="text" placeholder="Supply Timings">
						</div>
						</div>

						<div class="control-group">
						<label class="control-label" for="focusedInput">Supply Pattern:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="supplypattern" id="focusedInput" type="text" placeholder="Supply Pattern">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Type:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txttype" id="focusedInput" type="text" placeholder="Type">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Material Used:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtmaterialused" id="focusedInput" type="text" placeholder="Material Used">
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="focusedInput">Meter Number:</label>
						<div class="controls">
							<input class="input-xlarge focused" name="txtmeternumber" id="focusedInput" type="text" placeholder="Meter Number">
						</div>
						</div>
						
						<div class="form-actions">
						<button type="submit" onclick="return confirmSurveyAdd()" class="btn btn-primary">Submit</button>
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