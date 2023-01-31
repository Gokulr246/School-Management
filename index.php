<?php $page='dashboard';
include("php/dbconnect.php");
include("php/checklogin.php");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Fees Management System</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>

<?php
include("php/header.php");
?>

<body >
        <div id="page-wrapper" style="background-color:black;">
            <div id="page-inner" style="background-image: url('school1.jpg');  background-repeat: no-repeat; background-size: cover;" >
                <div class="row"     style="color:white;">
                    <div class="col-md-12"style="float:right;">
                        <h1 class="page-head-line"style="color:white;" >Dashboard</h1>
                        

                    </div>
                </div>
                <br>

<br><div style="float:right;background-color:#6600cc;color:white;">
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
document.getElementById('ct').innerHTML = x;
display_c();
 }
</script>


<body onload=display_ct();>
<span id='ct' ></span>
</div>
<div style="padding:50px;">
                <!-- /. ROW  -->
                <div class="row" >
				
				  <div class="col-md-4"  >
                        <div class="main-box mb-purple">
                            <a href="student.php">
                                <i class="fa fa-users fa-5x"></i>
                                <h4>Total Students: <?php include 'counter/stucount.php'?></h4>
                                <h5>Manage Students</h5>
                            </a>
                        </div>
                    </div>
				
				
                 
					 <div class="col-md-4" >
                        <div class="main-box mb-secondary">
                            <a href="report.php">
                                <i class="fa fa-th-large fa-5x"></i>
                                <h4>Available Grades: <?php include 'counter/totalgrade.php'?></h4>
                                <h5>School Grade Levels</h5>
                            </a>
                        </div>
                    </div>  
					
                    <div class="col-md-4" >
                        <div class="main-box mb-green" >
                            <a href="fees.php">
                                <i class="fa fa-money fa-5x"></i>
                                <h4>Total Earnings: <?php include 'counter/totalearncount.php'?></h4>
                                <h5>Collect Fees</h5>
                            </a>
                        </div>
                    </div>

                  
                    </div>
                

                
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a>
                                <i class="fa fa-toggle-on fa-5x"></i>
                                <h5>Active Students: <?php include 'counter/activecount.php'?></h5>

                            </a>
                        </div>
                    </div>

                    <div >
                    <div class="col-md-4">
                        <div class="main-box mb-maroon">
                            <a href="report.php">
                                <i class="fa fa-file-pdf-o fa-5x"></i>
                                <h5>View Reports</h5>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="main-box mb-secondary" style="background-image: url('red.jpg');  background-repeat: no-repeat;
 background-size: cover; height:150px;">
                            <a href="logout.php">
                                <i ></i>
                                <h5>Logout</h5>
                            </a>
                        </div>
                    </div>
                </div>
</div>
                <!-- /. ROW  -->

            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    
    </body>  
   <script src="js/jquery-1.10.2.js"></script>	
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>
    



</html>
