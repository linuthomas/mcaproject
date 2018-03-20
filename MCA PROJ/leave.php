
<!DOCTYPE html>
<html lang="en">

<head ><b>EMPLOYEE LEAVE </b></head>
<title>LEAVEDETAILS</title>
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
                        <li>+ 180-123-4567 / 8910</li>
                        <li>|</li>
                        <li>info@demo.com</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <ul>
                        <li><a href="#">Home</a> </li>
                        <li>|</li>
                        <li><a href="#">About us</a> </li>
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
                                        <li><a href="#">Edit Details</a></li>
                                    </ul>
								</li>
								
                                <li class="has-sub"><a href="#">LEAVE</a>
								<ul>
                                        <li><a href="#">Employee Leave</a></li>
                                    </ul>
                                </li>
                                
                                <li class="has-sub"><a href="#">PAYROLL</a>
								<ul>
                                        <li><a href="#">Salary Structure</a></li>
                                       
                                    </ul>
                                    
                                </li>
                                <li class="has-sub"><a href="#">ATTENDANCE</a>
								<ul>
                                        <li><a href="#">Attendance Report</a></li>
                                </ul>
                                </li>
								<li class="has-sub"><a href="#">RECRUITMENT</a>
								<ul>
                                        <li><a href="#">New Recruitments</a></li>
                                        <li><a href="#">Employee Recruitments</a></li>
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
 
<form method="post" action="">			
			<table border="1" width="100%" cellpadding="4" cellspacing="5" align="center">
				<!--<colspan="6" align="center"><font color="blue" style="bold" >ADD EMPLOYEE</font>
				<tr><td colspan="2" align="center"><font color="green" style="bold">PERSONAL DETAILS</td>
				<td align="center" colspan="4"><font color="green" style="bold">JOB DETAILS</td></tr>
				<tr>
				<!--<td> Employee ID:</td><td><input type="text" name="txtid"></td>-->
				
			    </tr>
				<td cellspacing="4" cellpadding="5"> Empid:</td><td><input type="text" name="eid"></td>
				<tr><td> Name:</td><td><input type="text" name="txtname"></td></tr>
				<tr><td> Designation:</td><td><input type="text" name="txtdes"></td></tr>
				
				<tr>
				<td>Leave from:</td>
				<td><input type="date" name="fromdate">
				<td>To:</td>
				<td><input type="date" name="todate"></td>
				</tr>
				<tr>
				<td>Reason for Leave</td>
				<td><textarea name="reason" rows="5" cols="40"></textarea></td>
				</tr>
				<tr>
				<td>Mobile Number during Leave:</td>
				<td>
				<input type="number" name="txtphn"></td>
				<td>Email:</td><td><input type="text" name="txtemail"></td>
			    <td align="center"> <input type="submit" align="center"name="btnSubmit" value="SEND"></td>
				</tr>	
			</table>
		</form>
<?php
if (isset($_POST["btnSubmit"]))
{
	//echo "hi";
include("connection.php");
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
$type=$_POST["txttype"];
$doj=$_POST["doj"];
$branch=$_POST["txtbranch"];
$depart=$_POST["txtdept"];
$sbasic=$_POST["txtpay"];
$hnam=$_POST["txthn"];
$sn=$_POST["txtsn"];
$dis=$_POST["txtds"];
$st=$_POST["txtst"];
$pincod=$_POST["txtpn"];
$empid=100;
/*$s=mysqli_query($con,"select * from addemp order by uid desc");
while($row=mysqli_fetch_array($s))
{
  $empid=$row[0];
  break;
}
$empid++; */
//$empid=1;
$regdate=date("Y")."-".date("m")."-".date("d");
//$s="INSERT INTO `addemp`(`name`, `sex`, `designation`, `mob`, `branch`, `dob`, `doj`, `type`, `department`, `email`, `basicpay`, `hname`, `hn`,
//`stname`, `strname`, `stat`, `statn`, `pinc`, `pinco`)  VALUES ('$empid','$name','$sex','$desig','$mobile','$branch','$dob','$doj',
//'$type','$depart','$email','$sbasic','$hname','$hnam','$sn','$stname','$state','$st','$pin','$pincod');";
$s= "insert into addemp values($empid,'$name','$sex','$dob','$mobile','$email','$hname','$stname','$dist','$state','$pin','$desig','$type','$doj',
'$branch','$depart','$sbasic','$hnam','$hnam','$dis','$st','$pincod')";
  echo $s;
 mysqli_query($con,$s);
//echo "success";
//echo $s;
}
?>
	</body>
</html>