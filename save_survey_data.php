<?php
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
//images 

include('includes/connection.php');
$con=mysqli_connect("localhost","root","","leak_management");
$sql = "INSERT INTO leaksurvey VALUES(NULL,'','','$zone','$reservoir','$dma','$address','$landmark','$latlng','$engineername','$rectifieddate','$rectifiedtime','$leaknumber','$complaintdate','$complainttime','$sizeofpit','$roadtype','$asphaltthick','$concrete','$macadam','$leakagequantity','$supply','$supply','$pattern','$type','$materialused','$materialnumber','','','')";

if (mysqli_query($con,$sql))
{
	header('location:index.php');
}
else
{
	die ("Query failed:".mysqli_error($con));
	//die('Unable to insert data:' .mysqli_error());
}

?>