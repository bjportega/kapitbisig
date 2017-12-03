<?php
include_once('db_con.php');


$DeviceID = $_POST['DeviceID'];
$ResID = $_POST['ResID'];
$DeviceNum = $_POST['DeviceNum'];
$DeviceDesc = $_POST['DeviceDesc'];



	

$result=mysqli_query($con,"INSERT INTO tbldevice(fldDeviceID,fldResID,fldCellphoneNumber,fldDeviceDescription)VALUES($DeviceID,$ResID,'$DeviceNum','$DeviceDesc')");											  

 echo "<script>alert('Successfully Save!');window.location.href='device.php';self.close();</script>";
?>