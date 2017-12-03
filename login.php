<!DOCTYPE html>
<html>
<head><title>Log In</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link href="login.css" type="text/css" rel="stylesheet"/>
</head>
<body>

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
/* TOGGLE PASSWORD VISIBIITY*/
function myFunction() {
    var x = document.getElementById("PASS");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>


<div id="wrapper">
	<img id="logo" src="LOGO1.PNG"/>

		<table>
		<form method="POST" action="LoginCode.php">
				            <tc>
									<td><div class="form_div">
										<p  class="form_label">LOGIN</p>
										
											<p class="inputs">Username: 	<input class="texts" name="UN" type="text" id="UN"/></p>
											<p class="inputs">Password: 	<input class="texts" name="PASS" type="password" id="PASS"/></p>
											<a href="login.php"><button id="submit" name="submit" type="submit" value="submit" class="btn btn-primary center">Submit</button></a>
											<input type="checkbox" onclick="myFunction()">Show Password
										</div>
									</td>
								</tc>
					       </form>
					</table>
				</div>
			</body>
       </html>

				