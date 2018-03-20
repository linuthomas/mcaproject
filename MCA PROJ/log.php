<?php
session_start();
include("connection.php");

$user=$_POST["username"];
$pass=$_POST["pass"];
$sq="select * from login where username='$user' and password='$pass';";
$res=mysqli_query($con,$sq);
//echo $sq;
	if(mysqli_num_rows($res)>0)
	{
		$row=mysqli_fetch_assoc($res);
		$loginid=$row["loginid"];
		$_SESSION['loginid']=$loginid;
		//$type=$row["usetype"];
		if($row['usertype']=='0')
		{
		//$_SESSION['user']=$_POST["Username"];
		header('location:adminhome.html');
		exit();
		}
		
	
	
	else if($row['usertype']=='1')
	{
	
		//$_SESSION['user']=$_POST["Username"];
		header('location:userhome.html');
		//echo $loginid;
		exit();
	}
	
}
else{	
		echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
              window.history.back();
			  document.getElementsByName('password').value='';
           }
		   else{
			   window.history.back();
			   document.getElementsByName('password').value='';
		   }
          </script>";
}
	
?>
