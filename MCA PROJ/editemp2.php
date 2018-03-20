$s="update addemp set loginid ='$lid',name='$txtname',sex='$gender',designation='$txtdes',mob='$txtphn',dob='$datedob',doj='$doj',department='$depart',
email='$txtemail',password='$txtpass',basicpay='$txtpay',hname='$txthname',hn='$txthn',stname='$txtsname',dist='$txtdis',strname='$txtsname',pdist='$txtdis',
stat='$txtstate',statn='$txtst',pinc='$txtpin',pinco='$txtpn' where name='$name'";
	  
	  mysqli_query($con,$s);
	   echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>Data edited successfully...!</font></marquee>";
			  echo "</div>";
