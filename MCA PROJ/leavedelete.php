<?php
include("connection.php");
$d=$_POST["h1"];
mysqli_query($con,"delete from leave where empid=$d");
 echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>$d Leave Rejected</font></marquee>";
			  echo "</div>";	
			  if(isset($_POST['submit']))
{
$d=$_POST['h1'];
$name=$_POST['name'];
$des=$_POST['desih'];
$lfrom=$_POST['lfrom'];
$lto=$_POST['lto'];
$rea=$_POST['reason'];
$mob=$_POST['mobile'];
$mail=$_POST['email'];

$sql="INSERT INTO `status`(`name`, `status`) VALUES ('$name','accept')";
$result=mysqli_query($con,$sql) ;
//$result=mysqli_query($con,$sql);
//header()
}
if(isset($_POST['reject']))
{
	$sql="INSERT INTO `status`(`name`, `status`) VALUES ('$name','reject')";
	$result=mysqli_query($con,$sql) ;   
}
?>