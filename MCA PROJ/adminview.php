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
                        <li><a href="adminhome.html">Home</a> </li>
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
                                        <li><a href="adminleave.php">Employee Leave</a></li>
                                    </ul>
                                </li>
                                
                                <li class="has-sub"><a href="#">PAYROLL</a>
								<ul>
                                        <li><a href="adminpayroll.php">Salary Structure</a></li>
                                       
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
background-image:url("images/bbb.jpg");
background-size:1500px,1500px;
}
</style>
<?php

include("connection.php");
$sql="select * from addemp;";
$res=mysqli_query($con,$sql);
echo "<table border ='1' cellspacing=3 width=100% height=100% align='center' style=margin:90px; bgcolor=#f7aa77>
<tr colspan=12><font size=15 color=white>EMPLOYEE LIST</font></tr>
<tr><th>Login id</th><th>Name</th><th>Designation</th><th>Mobile</th><th>DOB</th><th>DOJ</th><th>
Department</th><th>Email</th><th>Salary</th><th>House name</th><th>Pre.Housename</th><th>Street name</th><th>
District</th><th>pre.Streetname</th><th>Pre.District</th><th>State</th><th>per.State</th><th>Pincode</th><th>P.pincode</th></tr>";
 if(mysqli_num_rows($res)>0)
 {
 while($row=$res->fetch_assoc())
  {
	  $loginid=$row['loginid'];
	 // echo $loginid;	 
  echo "<tr><td>".$row["loginid"]."</td><td>".$row["name"]."</td><td>".$row["designation"]."</td><td>".$row["mob"]
  ."</td><td>".$row["dob"]."</td><td>".$row["doj"]."</td><td>".$row["department"]."</td><td>".$row["email"].
  "</td><td>".$row["basicpay"]."</td><td>".$row["hname"]."</td><td>".$row["hn"]."</td><td>".$row["stname"]."</td><td>".$row["dist"].
  "</td><td>".$row["strname"]."</td><td>".$row["pdist"]."</td><td>".$row["stat"]."</td><td>".$row["statn"]."</td><td>".$row["pinc"].
  "</td><td>".$row["pinco"]."</td>
  <td>
 <a href='admindelete.php?logid=".$row["loginid"]."'>DELETE</a></td>
 <td><a href='adminedit1.php?lid=".$row["loginid"]."'>EDIT</a></td>
 
 </tr>";	 
   }
 }
 echo"</table>"
  ?>