
<!DOCTYPE html>
<html lang="en">

<head ><b>EMPLOYEE DETAILS</b>
<title>EMPLOYEEDETAILS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>SHRMS Human Resources Management</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body align="center">
     <!-- top-header-section-->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
                    <ul>
                        <li>+ 9757172839</li>
                        <li>|</li>
                        <li>shrms@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <ul>
                        <li><a href="#">Home</a> </li>
                        <li>|</li>
                        <li><a href="about.html">About us</a> </li>
                        <li>|</li>
                        <li><a href="contact-us.html">Contact us</a></li>
                        <li>|</li>
                        <li><a href="#">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-toggel">
        <a href="#" id="dots" class="dots-icon"><i class="fa fa-ellipsis-v visible-xs"></i></a>
    </div>
   <!-- /.top-header-section-->
    <!-- header-section-->
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="logo">
                        <a href="index.html"><img src="./images/logo.png" alt=""> </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <!-- navigations-->
                    <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="has-sub"><a href="#">EMPLOYEE</a>
								<ul>
                                        <li><a href="adminadd.php">Add Employee</a></li>
                                        <!--<li><a href="#">Edit Details</a></li>-->
										<li><a href="adminview.php">View</a></li>
                                    </ul>
								</li>
								
                                <li class="has-sub"><a href="#">LEAVE</a>
								<ul>
                                        <li><a href="adminleave.php">Employee Leave</a></li>
                                    </ul>
                                </li>
                                
                                <li class="has-sub"><a href="#">PAYROLL</a>
								<ul>
                                        <li><a href="adminpayroll.php">Salary Structure</a></li>
                                       
                                    </ul>
                                    
                                </li>
                                <!--<li class="has-sub"><a href="#">ATTENDANCE</a>
								<ul>
                                        <li><a href="#">Attendance Report</a></li>
                                </ul>
                                </li>-->
								<li class="has-sub"><a href="#">TRAININGS</a>
								<ul>
                                        <li><a href="admintraining.php">New Trainings</a></li>
                                    </ul>
                                </li>
								<!--<li><a href="">TRAININGS</a>
                                </li>-->
                                
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
                <!--<div class="col-lg-3 hidden-md col-sm-6 hidden-xs pull-right">
                    <a href="#" class="btn btn-outline head-btn">Request A Consultation</a>
                </div>-->
            </div>
        </div>
    </div>
	<br>
	<style>
body{
background-image:url("images/background.jpeg");
background-size:1500px,1500px;
}
</style>
<?php
include("connection.php");
$id=$_GET['lid'];
$sql= "select * from addemp where loginid='$id';";
$r=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($r);

?>
<form method="post" action="">			
			<table border="0" width="100%" cellpadding="4" cellspacing="5" align="center">
				<colspan="6" align="center"><font color="blue" style="bold" ></font>
				<tr><td colspan="2" align="center"><font color="brown" style="bold"><b/>PERSONAL DETAILS</td>
				<td align="center" colspan="4"><font color="brown" style="bold"><b/>JOB DETAILS</td></tr>
				<tr>
				<!--<td> Employee ID:</td><td><input type="text" name="txtid"></td>-->
				
			    </tr>
				<td style="padding:9px;" cellspacing="4" cellpadding="5"> Loginid:</td><td><input type="text" name="txtlid" value="<?php echo $result['loginid']?>"></td>
				<!--<td>Image</td><td><input type="file" name="txtimg" size="50"></td>-->
				<tr>
				<td style="padding:9px;"cellspacing="4" cellpadding="5"> Name:</td><td><input type="text" name="txtname"value="<?php echo $result['name']?>"></td>
				
				
				</tr>
				
				<tr>
				<td style="padding:9px;">Sex:</td>
				<td>
					<input type="radio" name="gender" value="m" checked />Male
					<input type="radio" name="gender" value="f" />Female
				</td>
				<td style="padding:9px;">Date of Join:</td>
				<td><input type="date" name="doj"value="<?php echo $result['doj']?>">
				</tr>
				<tr><td style="padding:9px;">DOB:</td>
				<td><input type="date" name="datedob"value="<?php echo $result['dob']?>">
				<td style="padding:9px;"> Designation:</td>
				<td>
				<select name="txtdes"value="<?php echo $result['designation']?>">
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
				<td style="padding:9px;">Mobile:</td><td><input type="number" name="txtphn"value="<?php echo $result['mob']?>" ></td>
			
				<td style="padding:9px;">Department:</td>
				<td>
				<select name="txtdept" value="<?php echo $result['department']?>">
				<option>IT</option>
				</select>
				
				</td>
				<tr>
				<td style="padding:9px;">Email:</td><td><input type="email" name="txtemail"value="<?php echo $result['email']?>"></td>
				<td style="padding:9px;">Salary:</td><td><input type="number" name="txtpay"value="<?php echo $result['basicpay']?>"></td>
				</tr>
				<td style="padding:9px;">Password:</td><td><input type="text" name="txtpass"value="<?php echo $result['password']?>"></td>
				<tr><td colspan="2" align="center"><font color="brown" style="bold"><b/>PERMANENT ADDRESS</td><td align="center" colspan="2"><font color="brown" style="bold"><b/>PRESENT ADDRESS</td></tr>
				<tr>
				<td style="padding:9px;"> House Name:</td><td><input type="text" name="txthname"value="<?php echo $result['hname']?>"></td>
				<td style="padding:9px;"> House Name:</td><td><input type="text" name="txthn"value="<?php echo $result['hn']?>"></td>
			    </tr>
				<tr>
				<td style="padding:9px;"> Street Name:</td><td><input type="text" name="txtsname"value="<?php echo $result['stname']?>"></td>
				<td style="padding:9px;"> Street Name:</td><td><input type="text" name="txtsn"value="<?php echo $result['strname']?>"></td>
			    </tr>
				<tr>
				<td style="padding:9px;"> District:</td><td><input type="text" name="txtdis"value="<?php echo $result['dist']?>"></td>
				<td style="padding:9px;"> District:</td><td><input type="text" name="txtds"value="<?php echo $result['pdist']?>"></td>
			    </tr>
				<tr>
				<td style="padding:9px;"> State:</td><td><input type="text" name="txtstate"value="<?php echo $result['stat']?>"></td>
				<td style="padding:9px;"> State:</td><td><input type="text" name="txtst" value="<?php echo $result['statn']?>"></td>
			    </tr>
				<tr>
				<td style="padding:9px;"> Pincode:</td><td><input type="text" name="txtpin" value="<?php echo $result['pinc']?>"></td>
				<td style="padding:9px;"> Pincode:</td><td><input type="text" name="txtpn"  value="<?php echo $result['pinco']?>"></td>
			    </tr>
				</tr>
				
             <td>   
				</table>
				 <input type="submit" align="center" colspan="2" name="btnSubmit" value="SAVE"></td>
			
		</form>
		
<?php
if (isset($_POST["btnSubmit"]))
{
include("connection.php");
$loginid=$_POST["txtlid"];
$name=$_POST["txtname"];
$sex=$_POST["gender"];
$dob=$_POST["datedob"];
$mobile=$_POST["txtphn"];
$email=$_POST["txtemail"];
$hname=$_POST["txthname"];
$stname=$_POST["txtsname"];
$dist=$_POST["txtdis"];
$state=$_POST["txtstate"];
$pin=$_POST["txtpin"];
$desig=$_POST["txtdes"];
$doj=$_POST["doj"];
$depart=$_POST["txtdept"];
$pass=$_POST["txtpass"];
$sbasic=$_POST["txtpay"];
$hnam=$_POST["txthn"];
$sn=$_POST["txtsn"];
$dis=$_POST["txtds"];
$st=$_POST["txtst"];
$pincod=$_POST["txtpn"];
//$s=INSERT INTO `addemp`(`empid`, `name`, `sex`, `designation`, `mob`, `dob`, `doj`,`department`, `email`, `basicpay`, `hname`, `hn`, 
//`stname`, `dist`, `strname`, `pdist`, `stat`, `statn`, `pinc`, `pinco`) 
$s= "update addemp set `loginid`='$loginid',`name`='$name',`sex`='$sex',`designation`='$desig', `mob`='$mobile', `dob`='$dob', `doj`='$doj',`department`='$depart', 
`email`='$email',`password`='$pass',`basicpay`=$sbasic, `hname`='$hnam', `hn`='$hname', `stname`='$stname', `dist`='$dist', `strname`='$sn', `pdist`='$dis',
 `stat`='$state', `statn`='$st', `pinc`='$pincod', `pinco`='$pin' where loginid='$loginid'";


 mysqli_query($con,$s);
//echo "success";
//echo $s;
//$p="insert into login(`username`,`password`,`loginid`)VALUES('$email','$pass','$loginid');";
//mysqli_query($con,$p);
}
?>
</body>
</html>