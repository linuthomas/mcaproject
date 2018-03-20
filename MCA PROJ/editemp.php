<form method="post" action="editemp2.php">
			<?php
	
	  include("connection.php");
	  $v=$_POST["h1"];
	 $s=mysqli_query($con,"select * from addemp where loginid=$lid");
	  while($row=mysqli_fetch_array($s))
	  {
	   
 $loginid=$row[1];
$name=$row[2];
$sex=$row[3];
$dob=$_POST[6];
$mobile=$_POST[5];
$email=$_POST[9];
$hname=$_POST[12];
$stname=$_POST[14];
$dist=$_POST[15];
$state=$_POST[18];
$pin=$_POST[20];
$desig=$_POST[4];
$doj=$_POST[7];
$depart=$_POST[8];
$pass=$_POST[10];
$sbasic=$_POST[11];
$hnam=$_POST[13];
$sn=$_POST[14];
$dis=$_POST[17];
$st=$_POST[19];
$pincod=$_POST[21];
	 
	 //$m=mysqli_query($con,"select * from voter where vname=''");
		  }
		 
		  ?>
			<table border="1" width="100%" cellpadding="4" cellspacing="5" align="center">
				<colspan="6" align="center"><font color="blue" style="bold" >ADD EMPLOYEE</font>
				<tr><td colspan="2" align="center"><font color="green" style="bold">PERSONAL DETAILS</td>
				<td align="center" colspan="4"><font color="green" style="bold">JOB DETAILS</td></tr>
				<tr>
				<!--<td> Employee ID:</td><td><input type="text" name="txtid"></td>-->
				
			    </tr>
				<td cellspacing="4" cellpadding="5"> Loginid:</td><td><input type="text" name="txtlid" value="<?php echo $txtlid;?>"></td>
				<tr>
				<td cellspacing="4" cellpadding="5"> Name:</td><td><input type="text" name="txtname" value="<?php echo $txtname;?>"></td>
				<!--<td> Type of employee:</td><td><input type="text" name="txttype"></td>-->
				
				</tr>
				
				<tr>
				<td>Sex:</td>
				<td>
					<input type="radio" name="gender" value="m" checked value="<?php echo $gender;?>"/>Male
					<input type="radio" name="gender" value="f"  value="<?php echo $gender;?>"/>Female
				</td>
				<td>Date of Join:</td>
				<td><input type="date" name="doj value="<?php echo $doj;?>"">
				</tr>
				<tr><td>DOB:</td>
				<td><input type="date" name="datedob" value="<?php echo $datedob;?>">
				<td> Designation:</td>
				<td>
				<select name="txtdesig" value="<?php echo $txtdesig;?>">
				<option>Application Developer</option>
				<option>Application Support Analyst</option>
				<option>Associate Developer</option>
				<option>Developer</option>
				<option>IT Analyst</option>
				<option>Java Developer</option>
				<option>Network Administrator</option>
				<option>IT Systems Administrator</option>
				
				</select>
				
				</td>
				<!--<td>Branch:</td><td><input type="text" name="txtbranch"></td>-->
				<!--<td>Course:</td>
				<td><select name="district">
					<option>MCA</option>       
    					<option>MBA</option>       
				        <option>B-tech</option>       
				        <option>M-tech</option>       
   				        <option>Ernakulam</option>       
    					<option>Palakadu</option>       
    					<option>Kozhikode</option>       
    					<option>Trissur</option>       
    					<option>Kasrakode</option>       
    					<option>alapuzha</option>       
    					<option>iduki</option>       
    					<option>malapuram</option>       
    				
				   </select>	</td>-->
				</tr>
				<tr>
				<td>Mobile:</td><td><input type="number" name="txtphn" value="<?php echo $txtphn;?>"></td>
			
				<td>Department:</td>
				<td>
				<select name="txtdept" value="<?php echo $txtdept;?>">
				<option>IT</option>
				</select>
				
				</td>
				<tr>
				<td>Email:</td><td><input type="text" name="txtemail" value="<?php echo $txtemail;?>"></td>
				<td>Salary:</td><td><input type="number" name="txtpay" value="<?php echo $txtpay;?>"></td>
				</tr>
				<td>Password:</td><td><input type="text" name="txtpass" value="<?php echo $txtpass;?>"></td>
				<tr><td colspan="2" align="center"><font color="green" style="bold">PERMANENT ADDRESS</td>
				<td align="center" colspan="2"><font color="green" style="bold">PRESENT ADDRESS</td></tr>
				<tr>
				<td> House Name:</td><td><input type="text" name="txthname" value="<?php echo $txthname;?>"></td>
				<td> House Name:</td><td><input type="text" name="txthn" value="<?php echo $txthn;?>"></td>
			    </tr>
				<tr>
				<td> Street Name:</td><td><input type="text" name="txtsname" value="<?php echo $txtsname;?>"></td>
				<td> Street Name:</td><td><input type="text" name="txtsn" value="<?php echo $txtsn;?>"></td>
			    </tr>
				<tr>
				<td> District:</td><td><input type="text" name="txtdis" value="<?php echo $txtdis;?>"></td>
				<td> District:</td><td><input type="text" name="txtds" value="<?php echo $txtds;?>"></td>
			    </tr>
				<tr>
				<td> State:</td><td><input type="text" name="txtstate" value="<?php echo $txtstate;?>"></td>
				<td> State:</td><td><input type="text" name="txtst" value="<?php echo $txtst;?>"></td>
			    </tr>
				<tr>
				<td> Pincode:</td><td><input type="text" name="txtpin" value="<?php echo $txtpin;?>"></td>
				<td> Pincode:</td><td><input type="text" name="txtpn" value="<?php echo $txtpn;?>"></td>
			    </tr>
				</tr>
				   
				</table>
				
				<?php
include("connection.php");
$s=mysqli_query($con,"select * from addemp");
while($row=mysqli_fetch_array($s))
		{
			
			echo "<option>$row[1]</option>";
		}
			
			?>
		</select></td>
 <tr><td colspan="4" align="center"><input type="submit" name="Submit" value="Edit"></td></tr>
 </table>
 </form>

	</body>
</html>