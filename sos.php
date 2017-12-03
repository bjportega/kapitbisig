<html>
<head><title>SOS</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link href="sos.css" type="text/css" rel="stylesheet"/>
</head>
<body background="bg.png">

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="resident_registration.php">Registration</a>
  <a href="device.php">Device Registration</a>
  <a href="#">Chat Room</a>
  <a href="soslog.php">SOS Log</a>
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
	/* SCROLL TO TOP BUTTON*/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


<div id="wrapper">
	<img id="logo" src="LOGO1.PNG"/>

		<table>
			<tc>
				<td><div class="form_div1">
					<p class="form_label">MAP</p>
					<form method="post">
						<img id="img" src="map.jpg"/></td>
					</form>
				</div></td>
			</tc>
			<tc>
				<td><div class="form_div">
					<p class="form_label">SOS</p>
					<form method="post" action="">
						
						<table>
						<tr>
						<td><span class="inputs">Resident ID:<br><br>
							<?php include_once('db_con.php');  $result=mysqli_query($con,"SELECT * FROM tbldevicelog  order by fldID desc");
							$row =mysqli_fetch_array($result);
							$varDID=$row['fldDeviceID'];
							$result=mysqli_query($con,"SELECT * FROM tbldevice where fldDeviceID=$varDID");

							$row =mysqli_fetch_array($result);
							$varRID=$row['fldResID'];
							$result=mysqli_query($con,"SELECT * FROM tblresprofile where fldResID=$varRID");
							$row =mysqli_fetch_array($result);
							echo $row['fldResID'];?></span>
							<hr>
							</td>
							</tr>
						<tr>	
							<td><span class="inputs">Device ID:<br><br>
							<?php include_once('db_con.php');  $result=mysqli_query($con,"SELECT * FROM tbldevicelog  order by fldID desc");
							$row =mysqli_fetch_array($result);
							$varDID=$row['fldDeviceID'];
							echo$row['fldDeviceID'];?></span>
							<hr>
							</td>
							</tr>
							<tr>
							<td><span class="inputs">Contact Number:<br><br>	
							<?php include_once('db_con.php');  $result=mysqli_query($con,"SELECT * FROM tbldevicelog  order by fldID desc");
							$row =mysqli_fetch_array($result);
							$varDID=$row['fldDeviceID'];
							$result=mysqli_query($con,"SELECT * FROM tbldevice where fldDeviceID=$varDID");

							$row =mysqli_fetch_array($result);
							$varRID=$row['fldResID'];
							echo $row['fldCellphoneNumber'];?></span>
							<hr></td></tr>

							<tr><td><span class="inputs">Address:<br><br>
							<?php include_once('db_con.php');  $result=mysqli_query($con,"SELECT * FROM tbldevicelog  order by fldID desc");
							$row =mysqli_fetch_array($result);
							$varDID=$row['fldDeviceID'];
							$result=mysqli_query($con,"SELECT * FROM tbldevice where fldDeviceID=$varDID");

							$row =mysqli_fetch_array($result);
							$varRID=$row['fldResID'];
							$result=mysqli_query($con,"SELECT * FROM tblresprofile where fldResID=$varRID");
							$row =mysqli_fetch_array($result);
							echo $row['fldAddress'];?></span>
							<hr></td></tr>
							<tr>
							<td>
							<span class="inputs">Message Type: <br><br>
							<?php include_once('db_con.php');  $result=mysqli_query($con,"SELECT * FROM tbldevicelog  order by fldID desc");
							$row =mysqli_fetch_array($result);
							$varDID=$row['fldDeviceID'];
							echo $row['fldMessageType'];?></span>
							<hr></td></tr>

							<tr>
							<td><span class="inputs">Date:<br><br>
							<?php include_once('db_con.php');  $result=mysqli_query($con,"SELECT * FROM tbldevicelog  order by fldID desc");
							$row =mysqli_fetch_array($result);
							$varDID=$row['fldDeviceID'];
							echo $row['fldDate'];?></span>
							<hr></td>
							</tr>
							<tr>
							<td><span class="inputs">Time:<br><br>
							<?php include_once('db_con.php');  $result=mysqli_query($con,"SELECT * FROM tbldevicelog  order by fldID desc");
							$row =mysqli_fetch_array($result);
							$varDID=$row['fldDeviceID'];
							echo   $row['fldTime'] ;?></span>
							<hr></td></tr>

							<tr><td><span class="inputs">Message:<br><br>
							<?php include_once('db_con.php');  $result=mysqli_query($con,"SELECT * FROM tbldevicelog  order by fldID desc");
							$row =mysqli_fetch_array($result);
							$varDID=$row['fldDeviceID'];
							echo   $row['fldMessage'] ;?></span></td></tr>
					</form>
				</div></td>
			</tc>
</div>
</body>
</html>