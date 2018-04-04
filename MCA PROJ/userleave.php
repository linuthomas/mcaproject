<?php
session_start();
$loginid= $_SESSION["loginid"];
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
background-image:url("images/ll.jpg");
background-size:1500px,1500px;
}
</style>
 
<form method="post" action="">			
			<table border="0" width="100%" cellpadding="4" cellspacing="5" align="center">
				<!--<colspan="6" align="center"><font color="blue" style="bold" >ADD EMPLOYEE</font>
				<tr><td colspan="2" align="center"><font color="green" style="bold">PERSONAL DETAILS</td>
				<td align="center" colspan="4"><font color="green" style="bold">JOB DETAILS</td></tr>
				<tr>
				<!--<td> Employee ID:</td><td><input type="text" name="txtid"></td>-->
				
				<tr><td style="padding:9px;"> <b>Name:</b></td><td><input type="text" name="txtname"></td>
				<td style="padding:9px;"><b>Designation:</b></td>
				<td>
				<select name="txtdes">
				<option>Application Developer</option>
				<option>Application Support Analyst</option>
				<option>Associate Developer</option>
				<option>Developer</option>
				<option>IT Analyst</option>
				<option>Java Developer</option>
				<option>Network Administrator</option>
				<option>IT Systems Administrator</option>
				</select></td>
				
				
				</tr>
				
				<tr>
				<td style="padding:9px;"><b>No.of Leaves</b></td>
				<td><input type="number" name="nod">
				</td>
				</tr>
				<tr>
				<td style="padding:9px;" ><b>Reason for Leave</b></td>
				<td><textarea name="reason" rows="5" cols="40"></textarea></td>
				<td style="padding:9px;"><b>Leave Type:</b></td>
				<td>
				<select name="txtltype">
				<option>Casual</option>
				<option>Medical</option>
				</select>
				</tr>
				<tr>
				<td style="padding:9px;"><b>Mobile Number during Leave:</b></td>
				<td>
				<input type="number" name="txtphn"></td>
				<tr><td style="padding:9px;"><b>Email:</b></td><td><input type="email" name="txtemail"></td>
				</tr>	
			</table>
			<?php 
			include("connection.php");
			$q="select * from userleave where loginid='$loginid'";
$f=mysqli_query($con,$q);
while($rw=mysqli_fetch_array($f))
{
$a=$rw['allot'];
$n=$rw['nod'];
//echo $a;
$t=$a+$n; 
}
?>
			<br>
			<input type="submit" align="center" name="btnSubmit" value="SEND">
			<input type="submit" align="center" name="btncancel" value="CANCEL">
		</form>
<?php
if (isset($_POST["btnSubmit"]))
{
include("connection.php");

$loginid= $_SESSION["loginid"];
$name=$_POST["txtname"];
$designation=$_POST["txtdes"];
$nod=$_POST["nod"];
$reason=$_POST["reason"];
$ltype=$_POST["txtltype"];
$mob=$_POST["txtphn"];
$email=$_POST["txtemail"];

$q="select nod,allot from userleave where loginid='$loginid'";
$f=mysqli_query($con,$q);
$rw=mysqli_fetch_assoc($f);
$a=$rw['allot'];
$n=$rw['nod'];
$t=$a+$n;
if($t>4)
{
	echo "<script>var confirm = confirm(\"Leave limit exceeded\");
          if(confirm){ 
              window.location='userleave.php';
           }
		   else{
			   window.location='userleave.php';
		   }
          </script>";
}
else{


$s= "insert into userleave(`loginid`,`name`,`desih`,`reason`,`nod`,`ltype`,`mobile`,`email`)VALUES('$loginid','$name','$designation',
'$reason',$nod,'$ltype',$mob,'$email');";
//echo $s;
 mysqli_query($con,$s);
 echo "<script>var confirm = confirm(\"Request have been sent\");
          if(confirm){ 
              window.location='userleave.php';
           }
		   else{
			   window.location='userleave.php';
		   }
          </script>";
//echo $s;
}
}
?>
 </body>
</html>