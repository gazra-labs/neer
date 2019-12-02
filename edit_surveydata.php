<?php
$userID = $_GET['uID'];

	include('includes/connection.php');
    $con=mysqli_connect("localhost","root","","leak_management");
	$sql ="SELECT * FROM leaksurvey where id = '$userID'";
	$result = mysqli_query($con,$sql);

	$num = mysqli_num_rows($result);

	$i = 0;

	//while ($i < $num)
	while($row = mysqli_fetch_assoc($result)) {
		$autoid = $row["id"];
		$user = $row["userid"];
		$username = $row["username"];
		$zone = $row["zone"];
		$s_resevoir = $row["service_reservoir_name"];
		$dma_name = $row["dma_name"];
		$add = $row["address"];
		$ll = $row["lat_lng"];
		$nl = $row["nearest_landmark"];
		$en = $row["engineer_name"];
		$rd = $row["rectified_date"];
		$rt = $row["rectified_time"];
		$lrn = $row["leak_registration_number"];
		$cd = $row["complaint_date"];
		$ct = $row["complaint_time"];
		$sop = $row["size_of_pit"];
		$rt = $row["road_type"];
		$at = $row["asphalt_thick"];
		$ct = $row["concrete_thick"];
		$m = $row["macadam"];
		$lq = $row["leakage_quantity"];
		$st = $row["supply_timings"];
        $sp = $row["supply_pattern"];
        $t = $row["type"];
        $mu = $row["material_used"];
        $mn = $row["meter_number"];
        $in_one = $row["img_name_one"];
        $in_two = $row["img_name_two"];
        $url_one = $row["img_url_one"];
        $url_two = $row["img_url_two"];

		//$i++;


	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_five();
?>
<div class="page-wrapper">
				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Survey Data</h2>
						<div class="box-icon">
							<a href="index.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_survey_data.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtusername" id="focusedInput" type="text" placeholder="Username" 
								  value="<?php echo $username; ?>">
								</div>
							</div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Zone:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtzone" id="focusedInput" type="text" placeholder="Zone"
								   value="<?php echo $zone; ?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Service Reservoir Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtreservoir" id="focusedInput" type="text" placeholder="Service Reservoir Name"  value="<?php echo $s_resevoir; ?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">DMA Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdma" id="focusedInput" type="text" placeholder="DMA Name"
								   value="<?php echo $dma_name; ?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Address/ Street Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtaddress" id="focusedInput" type="text" placeholder="Address/ Street Name" value="<?php echo $add; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nearest Landmark:</label>
								<div class="controls">
								 <input class="input-xlarge focused" name="txtnearest" id="focusedInput" type="text" placeholder="Nearest Landmark"  value="<?php echo $nl; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Lattitude /Longitude:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtlatlng" id="focusedInput" type="text" placeholder="Lattitude /Longitude"  value="<?php echo $ll; ?>">
								</div>
							  </div>
                                <div class="control-group">
								<label class="control-label" for="focusedInput">Engineer Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtengineer" id="focusedInput" type="text" placeholder="Engineer Name"  value="<?php echo $en; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Rectified Date:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtrectifieddate" id="focusedInput" type="text" placeholder="Rectified Date"  value="<?php echo $rd; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Rectified Time:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtrectifiedtime" id="focusedInput" type="text" placeholder="Rectified Time"  value="<?php echo $rt; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Leak\Registration Number:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtleaknumber" id="focusedInput" type="text" placeholder="Leak\Registration Number"  value="<?php echo $lrn; ?>">
								</div>
							  </div>
                                <div class="control-group">
								<label class="control-label" for="focusedInput">Complaint Date:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtcomplaintdate" id="focusedInput" type="text" placeholder="Complaint Date"  value="<?php echo $cd; ?>">
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Complaint Time:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtcomplainttime" id="focusedInput" type="text" placeholder="Complaint Time"  value="<?php echo $ct; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Size of Pit:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtsizeofpit" id="focusedInput" type="text" placeholder="Size of Pit"  value="<?php echo $sop; ?>">
								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Road Type:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtroadtype" id="focusedInput" type="text" placeholder="Road Type"  value="<?php echo $rt; ?>">
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Asphalt thick:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtasphaltthick" id="focusedInput" type="text" placeholder="Asphalt thick"  value="<?php echo $at; ?>">
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Concrete Thick:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="concretethick" id="focusedInput" type="text" placeholder="Concrete Thick"  value="<?php echo $ct; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Macadam:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtmacadam" id="focusedInput" type="text" placeholder="Macadam"
								   value="<?php echo $m; ?>">
								</div>
							  </div>
                                <div class="control-group">
								<label class="control-label" for="focusedInput">Leakage Quantity:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtleakagequantity" id="focusedInput" type="text" placeholder="Leakage Quantity"  value="<?php echo $lq; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Supply Timings:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtsupplytimings" id="focusedInput" type="text" placeholder="Supply Timings"  value="<?php echo $st; ?>">
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" for="focusedInput">Supply Pattern:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="supplypattern" id="focusedInput" type="text" placeholder="Supply Pattern"  value="<?php echo $sp; ?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Type:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txttype" id="focusedInput" type="text" placeholder="Type"
								   value="<?php echo $t; ?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Material Used:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtmaterialused" id="focusedInput" type="text" placeholder="Material Used"  value="<?php echo $mu; ?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Meter Number:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtmeternumber" id="focusedInput" type="text" placeholder="Meter Number"  value="<?php echo $mn; ?>">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmSurveyUpdate()" class="btn btn-primary">Update Survey</button>
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