<?php
 
include_once('db_con.php'); 


$varUserName=$_POST['UN'];
$varPassword=$_POST['PASS'];

//echo $varUserName . "<br>";
//echo $varPassword . "<br>";
$result=mysqli_query($con,"SELECT * from tbluseradmin where fldUsername='$varUserName' AND fldPassword='$varPassword'");


//if(mysqli_error()){
	//echo"Error Database,connection,SQL command";

//}else{
$count=mysqli_num_rows($result);

      if($count>0){
      //echo "Welcome";
header("Location:sos.php");


	  }else{
       echo "<script>alert('INVALID Username & Password!');window.location.href='login.php';self.close();</script>";
      }

      

?>