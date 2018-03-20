<?php
include "connection.php";
$id=$_GET['logid'];
$sql="delete from addemp where loginid='$id';";
mysqli_query($con,$sql);

 echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>$id is deleted...!</font></marquee>";
			  echo "</div>";	
 ?>