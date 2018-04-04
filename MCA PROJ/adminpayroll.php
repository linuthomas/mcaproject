<?php
 	$db=mysqli_connect("localhost","root","","hrm");
						
  $query = "SELECT loginid FROM addemp";
     
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("id" => $row['loginid'], "val" => $row['loginid']);
  }

  $query =  "SELECT loginid,basicpay FROM addemp";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['loginid']][] = array("id" => $row['basicpay'], "val" => $row['basicpay']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);


?>
<!DOCTYPE html>
<html lang="en">

<head ><b>SALARY DETAILS</b>
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
	<script type='text/javascript'>
	 var x = 0;
        var u= 0;
		
      <?php
       echo "var categories = $jsonCats; \n";
       echo "var subcats = $jsonSubCats; \n";
      ?>
      function loadCategories(){
        var select = document.getElementById("categoriesSelect");
        select.onchange = updateSubCats;
        for(var i = 0; i < categories.length; i++){
          select.options[i] = new Option(categories[i].val,categories[i].id);          
        }
      }
      function updateSubCats(){
        var catSelect = this;
        var catid = this.value;
        var subcatSelect = document.getElementById("subcatsSelect");
        subcatSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < subcats[catid].length; i++){
          subcatSelect.options[i] = new Option(subcats[catid][i].val,subcats[catid][i].id);
        }
		calc();
      }
	  

 
		
	
        function calc()
		{
			u=document.getElementById('subcatsSelect').value;
			
			y=parseInt(u);	
			
				
	  if(y<20000)
	{
		hra=y/100*8;
		da=y/100*7;
		ma=y/100*3;
		gross=y+hra+da+ma;
		pf=y/100*9;
		tax=y/100*2;
		netpay=gross-pf-tax;
		 document.getElementById('hra').value = hra;
		  document.getElementById('da').value = da;
		   document.getElementById('ma').value = ma;
		    document.getElementById('gross').value = gross;
			 document.getElementById('pf').value = pf;
			  document.getElementById('tax').value = tax;
			   document.getElementById('net').value = netpay;
		
		
	}
		else
		{
		hra=y/100*9;
		da=y/100*10;
		ma=y/100*4;
		gross=y+hra+da+ma;
		pf=y/100*9;
		tax=y/100*3;
		netpay=gross-pf-tax;
		 document.getElementById('hra').value = hra;
		  document.getElementById('da').value = da;
		   document.getElementById('ma').value = ma;
		    document.getElementById('gross').value = gross;
			 document.getElementById('pf').value = pf;
			  document.getElementById('tax').value = tax;
			   document.getElementById('net').value = netpay;
			    
		
	}
	if(y>35000&&y<=60000)
	{
		hra=y/100*10;
		da=y/100*12;
		ma=y/100*5;
		gross+hra+da+ma;
		pf=y/100*11;
		tax=y/100*4;
		netpay=gross-pf-tax;
		 document.getElementById('hra').value = hra;
		  document.getElementById('da').value = da;
		   document.getElementById('ma').value = ma;
		    document.getElementById('gross').value = gross;
			 document.getElementById('pf').value = pf;
			  document.getElementById('tax').value = tax;
			   document.getElementById('net').value = netpay;
	}
	else if(y>60000)
	{
		hra=y/100*12;
		da=y/100*12;
		ma=y/100*7;
		gross=y+hra+da+ma;
		pf=y/100*12;
		tax=y/100*5;
		netpay=gross-pf-tax;
		 document.getElementById('hra').value = hra;
		  document.getElementById('da').value = da;
		   document.getElementById('ma').value = ma;
		    document.getElementById('gross').value = gross;
			 document.getElementById('pf').value = pf;
			  document.getElementById('tax').value = tax;
			   document.getElementById('net').value = netpay;
	}
            } 
			/*else {
                x = Number(document.getElementById('aprice').value);
                y = Number(obj.value);
            }
            z = x * y;
            document.getElementById('price').value = z;
            document.getElementById('update').innerHTML = z;
        }*/
    </script>
</head>
<body align="center" onload='loadCategories()'>
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
background-image:url("images/sall.jpg");
background-size:1500px,1500px;
}
.table1{
	border-collapse:seperate;
	border-spacing:15px ;
}
</style>
 
<form method="post" action="">			
			<table class="table1" border="0" width="100%" cellpadding="4" cellspacing="5" align="center">
				<colspan="6" align="center"><font color="black" style="bold" ></font>
				<!--<tr><td colspan="2" align="center"><font color="green" style="bold"></td>-->
				<!--<td align="center" colspan="4"><font color="green" style="bold">DEDUCTIONS</td></tr>
				<tr>
				<!--<td> Employee ID:</td><td><input type="text" name="txtid"></td>-->
			    </tr>
				<tr>
				<td style="padding:9px;"><font color="white"/><b/> LoginId</td><td><select  name="s2" id="categoriesSelect" ></select></td>
				<td style="padding:9px;"><font color="indigo"/><b/>HRA</td><td><input type="text" id="hra" name="txthra"></td>
				</tr>
				   <tr>
				<td style="padding:9px;"><font color="white"/><b/>Salary</td><td><select name="sl" id="subcatsSelect" onchange="calc(this)"></td>
				<td style="padding:9px;"><font color="indigo"/><b/>DA</td><td><input type="text" id="da" name="txtda"></td>
				</tr>
				<tr>
				<td> </td><td></td>
				<td style="padding:9px;"><font color="indigo"/><b/>MA</td><td><input type="text" id="ma"name="txtma"></td>
				</tr>
				<tr>
			    <td></td><td></td>
				<td style="padding:9px;"><font color="black"/><b/>GROSS SALARY</td><td><input type="text" id="gross" name="txtgross"></td>
				</tr>
				
				 
				<!--<td>Email:</td><td><input type="text" name="txtemail"></td>
				<!--<td>Total Present Days:</td><td><input type="number" name="txtpresesnt"></td>-->
				<!--<tr><td>Salary </td><td><input type="text" name="salary"></td></tr>-->
			    <tr><td><td align="center" colspan="4"><font color="indigo" style="bold" size="5">DEDUCTIONS</td></td></tr>
				
				<tr> <td><td><td style="padding:9px;"><font color="indigo"/><b/>PF</td></td></td><td><input type="text" id="pf"name="txtpf"></tr>
			
				<tr> <td><td><td style="padding:9px;"><font color="indigo"/><b/>TAX</td></td></td><td><input type="text" id="tax"name="txttax"></tr>

				<!--<tr><td> LEAVE</td><td><input type="text" name="txtleave">-->
				<td><td><td style="padding:9px;"><font color="black"/><b/>NET PAY</td></td></td><td><input type="text" id="net" name="netpay"></td>
				</tr>
				</table>
				<br>
				 <input type="submit" align="center" colspan="2" name="btnSubmit" value="SAVE"></td>
			
		</form>
		
<?php
if (isset($_POST["btnSubmit"]))
{
include("connection.php");
$loginid=$_POST["s2"];
$hra=$_POST["txthra"];
$da=$_POST["txtda"];
$ma=$_POST["txtma"];
$gross=$_POST["txtgross"];
$salary=$_POST["sl"];
$pf=$_POST["txtpf"];
$tax=$_POST["txttax"];
//$leave=$_POST["txtleave"];
$netpay=$_POST["netpay"];
//INSERT INTO `payroll`(`payid`, `loginid`, `hra`, `da`, `ma`, `gross`, `salary`, `pf`, `tax`, `netpay`)
$s= "insert into payroll(`loginid`,`hra`, `da`, `ma`, `gross`, `salary`, `pf`, `tax`, `netpay`)
VALUES('$loginid',$hra,$da,$ma,$gross,$salary,$pf,$tax,$netpay);";
 mysqli_query($con,$s);
//echo $s;
}
?>
</body>
</html>