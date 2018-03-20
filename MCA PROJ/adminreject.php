<?php
include "connection.php";
	$id=$_GET['logid'];
	$s="delete from userleave where logid=$id;";
	mysqli_query($con,$s);
	
	//header("location:adminleave.php");
	
	echo "<script>var confirm = confirm(\"Leave Rejected\");
          if(confirm){ 
              window.location='adminleave.php';
           }
		   else{
			   window.location='adminleave.php';
		   }
          </script>";
?>