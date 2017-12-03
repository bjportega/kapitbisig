<html>
<head><title>SOS</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link href="soslog.css" type="text/css" rel="stylesheet"/>
</head>
<body background="bg.png">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="resident_registration.php">Registration</a>
  <a href="sos.php">SOS</a>
  <a href="device.php">Device Registration</a>
  <a href="#">Chat Room</a>
  <a href="login.php">Log Out</a>
</div>

<span style="font-size:30px;cursor:pointer;font-weight:bold;" onclick="openNav()">&#9776;  Menu</span>

<script>
	function openNav() {
    	document.getElementById("mySidenav").style.width = "250px";
    	document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}
	function closeNav() {
    	document.getElementById("mySidenav").style.width = "0";
   		document.body.style.backgroundColor = "white";
	}
</script>


<div id="wrapper">
	<img id="logo" src="LOGO1.PNG"/>
	<table>
		<td><div class="form_div">
				<p  class="form_label">SOS Log</p>

<?php
include_once('db_con.php'); 

echo "<table border='1' width='120'>

<tr>
<th>Device_ID</th>
<th>Date</th>
<th>Time</th>
<th>Message</th>
<th>Message_Type</th>
<th>Residence_ID</th>
<th>Family_Name</th>
<th>Number of Members</th>
<th>Address</th>
<th>Node_ID</th>
</tr>";

echo "<tr>";
$result=mysqli_query($con,"SELECT * FROM tbldevicelog  order by fldID desc");

$row =mysqli_fetch_array($result);

$varDID=$row['fldDeviceID'];

echo"<td width='300',height='300'>".$row['fldDeviceID'] ."</td>";
echo"<td width='300',height='300'>".$row['fldDate'] ."</td>";
echo"<td width='300',height='300'>".$row['fldTime'] ."</td>";
echo"<td width='300',height='300p'>".$row['fldMessage'] ."</td>";
echo"<td width='300',height='300'>".$row['fldMessageType'] ."</td>";


 $result=mysqli_query($con,"SELECT * FROM tbldevice where fldDeviceID=$varDID");
 $row =mysqli_fetch_array($result);

 $varRID=$row['fldResID'];
 
 $result=mysqli_query($con,"SELECT * FROM tblresprofile where fldResID=$varRID");
 $row =mysqli_fetch_array($result);

echo"<td width='300px',height='300px'>".$row['fldResID'] ."</td>";
echo"<td width='300px',height='300px'>".$row['fldFamilyName'] ."</td>";
echo"<td width='300px',height='300px'>".$row['fldNumberofMembers'] ."</td>";
echo"<td width='300px',height='300px'>".$row['fldAddress'] ."</td>";
echo"<td width='300px',height='300px'>".$row['fldNodeID'] ."</td>";


echo "</tr>";

echo"</table>";
?>

</body>
</html>
