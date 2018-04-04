<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
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

<body>
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
                        <li><a href="userhome.html">Home</a> </li>
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
							 <li class="has-sub"><a href="#">PROFILE</a>
								<ul>
                                        <li><a href="userprofileview.php">View my profile</a></li>
                                        
										
                                    </ul>
								</li>
                                <li class="has-sub"><a href="#">LEAVE</a>
								<ul>
                                        <li><a href="userleave.php">Leave Application</a></li>
                                        <li><a href="userleavestatus.php">Status</a></li>
										
                                    </ul>
								</li>
								
                                <li class="has-sub"><a href="#">PAYROLL</a>
								<ul>
                                        <li><a href="usersalaryview.php">View Salary</a></li>
                                    </ul>
                                </li>
                                
                              <!--  <li class="has-sub"><a href="#">ATTENDANCE</a>
								<ul>
                                        <li><a href="#">Daily Attendance</a></li>
                                       
                                    </ul>
                                    
                                </li>
                                <!--<li class="has-sub"><a href="#">ATTENDANCE</a>
								<ul>
                                        <li><a href="#">Attendance Report</a></li>
                                </ul>
                                </li>-->
								<li class="has-sub"><a href="#">TRAININGS</a>
								<ul>
                                        <li><a href="usertrainingview.php">New Training</a></li>
                                        <!--<li><a href="#">Employee Recruitments</a></li>-->
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
$loginid=$_SESSION['loginid'];
$sql="select loginid,reason,ltype,nod,status from userleave WHERE loginid='$loginid';";
$res=mysqli_query($con,$sql);
echo "<table border ='0' cellspacing=3 width=100% height=100% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr><colspan=12><font size=15 color=white >LEAVE STATUS</font></th></tr>
<tr><th>REASON</th><th>LEAVE TYPE</th><th>NUM.OF LEAVES</th><th>STATUS</th></tr>";
// if(mysqli_num_rows($res)>0)
 //{
 while($row=mysqli_fetch_array($res))
  {
	  //echo $loginid;
	 
  echo "<tr><td>".$row["reason"]."</td><td>".$row["ltype"]."</td><td>".$row["nod"]."
  </td><td>".$row["status"]."</td>	
 </tr>";  
   }
 echo"</table>"
  ?>
 