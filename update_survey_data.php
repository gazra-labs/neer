<?php
$autoid = $_POST['hid'];
$user = $_POST['txtusername'];
$zone = $_POST['txtzone'];
$reservoir = $_POST['txtreservoir'];
$dma = $_POST['txtdma'];
$address = $_POST['txtaddress'];
$landmark = $_POST['txtnearest'];
$latlng = $_POST['txtlatlng'];
$engineername = $_POST['txtengineer'];
$rectifieddate = $_POST['txtrectifieddate'];
$rectifiedtime = $_POST['txtrectifiedtime'];
$leaknumber = $_POST['txtleaknumber'];
$complaintdate = $_POST['txtcomplaintdate'];
$complainttime =$_POST['txtcomplainttime'];
$sizeofpit = $_POST['txtsizeofpit'];
$roadtype = $_POST['txtroadtype'];
$asphaltthick = $_POST['txtasphaltthick'];
$concrete = $_POST['concretethick'];
$macadam = $_POST['txtmacadam'];
$leakagequantity = $_POST['txtleakagequantity'];
$supply = $_POST['txtsupplytimings'];
$pattern = $_POST['supplypattern'];
$type = $_POST['txttype'];
$materialused = $_POST['txtmaterialused'];
$materialnumber = $_POST['txtmeternumber'];

include('includes/connection.php');
$con=mysqli_connect("localhost","root","","leak_management");
$sql = "UPDATE leaksurvey SET username='$user', zone='$zone', service_reservoir_name='$reservoir', dma_name='$dma', address='$address'
, nearest_landmark='$landmark', lat_lng='$latlng', engineer_name='$engineername', rectified_date='$rectifieddate', rectified_time='$rectifiedtime', leak_registration_number='$leaknumber', complaint_date='$complaintdate', complaint_time='$complainttime', size_of_pit='$sizeofpit', road_type='$roadtype' , asphalt_thick='$asphaltthick', concrete_thick='$concrete', macadam='$macadam', leakage_quantity='$leakagequantity' , supply_timings='$supply', supply_pattern='$pattern', type='$type', material_used='$materialused', meter_number='$materialnumber'  WHERE id='$autoid'";


if(mysqli_query($con,$sql))
{
	header('location:index.php');
}
else
{
	die('Unable to update record: ' .mysqli_error($conn));
}
?>