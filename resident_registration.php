<!DOCTYPE html>
<html>
<head><title>Registration</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link href="resident_registration.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="device.php">Device Registration</a>
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
			 <form action="reg_code.php" method="POST" enctype="multipart/form-data"><tc>
									<td><div class="form_div">
											<p  class="form_label">Resident Profile Registration Form</p>

											<p class="inputs">Resident ID: 	<input class="texts" name="resID" type="text" id="resID" class="form-control"/></p>
											<p class="inputs">Family Name: <input class="texts" name="FamName" type="text" id="FamName"/></p>
											<p class="inputs">Number Of Members: <input class="texts"name="NumMember" type="text" id="NumMember"/></p>
											<p class="inputs">Address: <input class="texts" name="Address" type="text" id="Address"></p>
											<p class="inputs">Node ID: <input class="texts" name="NodeID" type="text" id="NodeID"></p>
											<p class="inputs">Street View Photo: Select file to upload<br><input type="file" name="fileToUpload" id="fileToUpload"></p>
											<a href="registration_resident.php"><button id="submit" name="submit" type="submit" value="submit" class="btn btn-primary center">Submit</button></a>
										</div>
									</td>
								</tc>
					       </form>
					</table>
				</div>
			</body>
       </html>