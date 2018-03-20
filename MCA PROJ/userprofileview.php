<?php
	session_start();
	?>
	<html>
	<head>
	</head>
	<body>
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
                                        <li><a href="#">View Salary</a></li>
                                       
                                    </ul>
                                    
                                </li>
                                <li class="has-sub"><a href="#">RECRUITMENT</a>
								<ul>
                                        <li><a href="#">New Recruitments</a></li>
                                </ul>
                                </li>
								<!--<li class="has-sub"><a href="#"></a>
								<ul>
                                        <li><a href="#"></a></li>
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
	<style>
body{
background-image:url("images/profi.png");
background-size:1500px,1500px;
}
</style>
	
	
								<?php
								include("connection.php");
								$loginid=$_SESSION['loginid'];
								$sql="select * from addemp where loginid='$loginid'";
								$r=mysqli_query($con,$sql);
								$result=mysqli_fetch_assoc($r);
								?>


<form method="post" action="useredit.php">			
			<table border="1" width="100%" cellpadding="4" cellspacing="5" align="center">
				<!--<colspan="6" align="center"><font color="blue" style="bold" >ADD EMPLOYEE</font>-->
				<tr><td colspan="2" align="center"><font color="green" style="bold">PERSONAL DETAILS</td>
				<td align="center" colspan="4"><font color="green" style="bold">JOB DETAILS</td></tr>
				<tr>
				<!--<td> Employee ID:</td><td><input type="text" name="txtid"></td>-->
				
			    </tr>
				<td cellspacing="4" cellpadding="5"> Loginid:</td><td><input type="text" name="txtlid" value="<?php echo $result['loginid']?>"></td>
				<tr>
				<td cellspacing="4" cellpadding="5"> Name:</td><td><input type="text" name="txtname" value="<?php echo $result['name']?>"></td>
				<!--<td> Type of employee:</td><td><input type="text" name="txttype"></td>-->
				
				</tr>
				
				<tr>
				<td>Sex:</td>
				<td>
					<input type="radio" name="gender" value="<?php echo $result['sex']?>"/>Male
					<input type="radio" name="gender" value="<?php echo $result['sex']?>"/>Female
					
				</td>
				<td>Date of Join:</td>
				<td><input type="date" name="doj value="<?php echo $result['doj']?>"">
				</tr>
				<tr><td>DOB:</td>
				<td><input type="date" name="datedob" value="<?php echo $result['dob']?>">
				<td> Designation:</td>
				<td>
				<select name="txtdesig" value="<?php echo $result['designation']?>">
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
				<td>Mobile:</td><td><input type="number" disabled name="txtphn" value="<?php echo $result['mob']?>"></td>
			
				<td>Department:</td>
				<td>
				<select name="txtdept" value="<?php echo$result['department']?>">
				<option>IT</option>
				</select>
				
				</td>
				<tr>
				<td>Email:</td><td><input type="text" disabled name="txtemail" value="<?php echo $result['email']?>"></td>
				<td>Salary:</td><td><input type="number" disabled name="txtpay" value="<?php echo $result['basicpay']?>"></td>
				</tr>
				<td>Password:</td><td><input type="text" disabled name="txtpass" value="<?php echo $result['password']?>"></td>
				<tr><td colspan="2" align="center"><font color="green" style="bold">PERMANENT ADDRESS</td>
				<td align="center" colspan="2"><font color="green" style="bold">PRESENT ADDRESS</td></tr>
				<tr>
				<td> House Name:</td><td><input type="text" disabled name="txthname" value="<?php echo $result['hname']?>"></td>
				<td> House Name:</td><td><input type="text" disabled name="txthn" value="<?php echo $result['hn']?>"></td>
			    </tr>
				<tr>
				<td> Street Name:</td><td><input type="text" disabled name="txtsname" value="<?php echo$result['stname']?>"></td>
				<td> Street Name:</td><td><input type="text" disabled name="txtsn" value="<?php echo $result['strname']?>"></td>
			    </tr>
				<tr>
				<td> District:</td><td><input type="text" disabled name="txtdis" value="<?php echo$result['dist']?>"></td>
				<td> District:</td><td><input type="text" disabled name="txtds" value="<?php echo $result['pdist']?>"></td>
			    </tr>
				<tr>
				<td> State:</td><td><input type="text" disabled name="txtstate" value="<?php echo $result['stat']?>"></td>
				<td> State:</td><td><input type="text" disabled name="txtst" value="<?php echo $result['statn'];?>"></td>
			    </tr>
				<tr>
				<td> Pincode:</td><td><input type="text" disabled name="txtpin" value="<?php echo $result['pinc']?>"></td>
				<td> Pincode:</td><td><input type="text" disabled name="txtpn" value="<?php echo $result['pinco']?>"></td>
			    </tr>
				</tr>
				   
				</table>
				</table>
				 <input type="submit" align="center" colspan="2" name="btnSubmit" value="EDIT"></td>
			
		</form>
		

</body>
</html>