<?php
include "connection.php";
	$id=$_GET['logid'];
	
	//echo $id;
	$s="UPDATE `userleave` SET `status`='REJECTED' WHERE loginid='$id';";
	//$ss="delete from userleave where loginid='$id';";
	mysqli_query($con,$s);
	//mysqli_query($con,$ss);
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
