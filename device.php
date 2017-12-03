<!DOCTYPE html>
<html>
<head><title>Device</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link href="device.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="resident_registration.php">Registration</a>
  <a href="sos.php">SOS</a>
  <a href="#">Chat Room</a>
  <a href="soslog.php">SOS Log</a>
  <a href="login.php">Log Out</a>
</div>

<span style="font-size:30px;cursor:pointer;font-weight:bold;" onclick="openNav()">&#9776;  Menu</span>

<script>
/* SIDEBAR NAVIGATION SCRIPT*/	
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
			 <form action="regdev_code.php" method="POST" enctype="multipart/form-data"><tc>
									<td><div class="form_div">
											<p  class="form_label">Device Registration Form</p>

											<p class="inputs">Device ID: 	<input class="texts" name="DeviceID" type="text" id="DeviceID"/></p>
											<p class="inputs">Resident ID: <input class="texts" name="ResID" type="text" id="ResID"></p>
											<p class="inputs">Cellphone Number: <input class="texts" name="DeviceNum" type="text" id="NumMember"/></p>
											<p class="inputs">Device Description<input class="texts"name="DeviceDesc" type="text" id="DeviceDesc"></p>
											<a href="device.php"><button id="submit" name="submit" type="submit" value="submit">Submit</button></a>
										</div>
									</td>
								</tc>
					       </form>
					</table>
				</div>
			</body>
       </html>