<!DOCTYPE html>
<html lang="en">

<head ><b>TRAINING DETAILS</b>
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
                                       <!-- <li><a href="#">Edit Details</a></li>-->
										<li><a href="adminview.php">View</a></li>
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
                              <!--  <li class="has-sub"><a href="#">ATTENDANCE</a>
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
<form method="post" action="">			
			<table border="1" width="100%" cellpadding="4" cellspacing="5" align="center">
				<!--<colspan="6" align="center"><font color="blue" style="bold" >ADD EMPLOYEE</font>
				<tr><td colspan="2" align="center"><font color="green" style="bold">PERSONAL DETAILS</td>
				<td align="center" colspan="4"><font color="green" style="bold">JOB DETAILS</td></tr>
				<tr>
				<!--<td> Employee ID:</td><td><input type="text" name="txtid"></td>-->
				<tr><td> Name of Training:</td><td><input type="text" name="txtname"></td>
				
				<tr>
				<td>Training Details</td>
				<td><textarea name="details" rows="5" cols="40"></textarea></td>
				</tr>
				<tr>
				<td>Date of Training:</td>
				<td><input type="date" name="fromdate"></td>
				<tr>
				<td>Time Of Training:</td>
				<td><input type="time" name="traintime"></td>
				</tr>	
			</table>
			<br>
			<input type="submit" align="center" name="btnSubmit" value="SEND">
			<input type="submit" align="center" name="btncancel" value="CANCEL">
		</form>
		<?php
if (isset($_POST["btnSubmit"]))
{
	//echo "hi";
include("connection.php");
$trname=$_POST["txtname"];
$det=$_POST["details"];
$date=$_POST["fromdate"];
$time=$_POST["traintime"];

//$empid=100;
/*$s=mysqli_query($con,"select * from addemp order by uid desc");
while($row=mysqli_fetch_array($s))
{
  $empid=$row[0];
  break;
}
$empid++; */
//$empid=1;
//$regdate=date("Y")."-".date("m")."-".date("d");
//$s=INSERT INTO `addemp`(`empid`, `name`, `sex`, `designation`, `mob`, `dob`, `doj`,`department`, `email`, `basicpay`, `hname`, `hn`, 
//`stname`, `dist`, `strname`, `pdist`, `stat`, `statn`, `pinc`, `pinco`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],
//[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21])
$s= "insert into training(`trname`,`details`,`dateoftr`, `timeoftr`)VALUES('$trname','$det','$date','$time');";

 mysqli_query($con,$s);
//echo "success";
//echo $s;

}
?>
</body>
</html>