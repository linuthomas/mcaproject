<?php
include("connection.php");
$id=$_GET['logid'];
$s="update userleave set status=1 where loginid='$id';";
mysqli_query($con,$s);
echo 
"<script>var confirm=confirm(\"Approved\");
if(confirm){
	window.location='adminleave.php';
           }
		   else{
			   window.location='adminleave.php';
		   }
          </script>";
?>