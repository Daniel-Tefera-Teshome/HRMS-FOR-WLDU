	<?php
		session_start();
		if(!isset($_SESSION['user'])){
		?>
			<script> alert("You are are not logged in please login first!!") </script>
		<?
			header("location:../login.php");
			}
		?>




<!DOCTYPE html>
<html>
<head>
	<title>WLDU HRMS</title>
	<link rel="stylesheet" type="text/css" href="hrmsstyle.css">
	<link rel="icon" type="img/png" href="image/logo.jpg"/>
	<style>
		
		@media (min-width: 1365px) and (max-width: 1400px){
			#h1-heading{
				/*display: none;*/
				font-size: 50px;
				color: red;
				font-family: arial;
			}
		}

		@media (min-width: 1000px) and (max-width: 1365px){
			#h1-heading{
				/*display: none;*/
				font-size: 35px;
				color: red;
				font-family: arial;
			}
		}

		@media (min-width: 880px) and (max-width: 1000px){
			#h1-heading{
				/*display: none;*/
				font-size: 30px;
				color: red;
				font-family: arial;
			}
		}

		@media (min-width: 400px) and (max-width: 880px){
			#h1-heading{
				/*display: none;*/
				font-size: 20px;
				color: red;
				font-family: arial;
			}
		}

		@media (min-width: 300px) and (max-width: 400px){
			#h1-heading{
				/*display: none;*/
				font-size: 15px;
				color: red;
				font-family: arial;
			}
		}

		@media (min-width: 20px) and (max-width: 300px){
			#h1-heading{
				/*display: none;*/
				font-size: 9px;
				color: red;
				font-family: arial;
			}
		}
	
		
	</style>

</head>
<body>
<div id = "header">
	<img class = "hrlogo" src="image/HR.png">
	<img class = "wldulogo" src="image/logo.jpg">
	<!--<img style="vertical-align: center;" class = "header-image" src="image/Header_image2.png"> -->
	<h1 id = "h1-heading" style="text-align: center;font-weight: bolder;font-family: Stencil;color: white;padding: 10px;"> Woldia University Human Resource Management System</h1>
</div>


<div id = "navbar">

	<ul>
		<li><a href="home.php">Home</a> </li>
		<li><a href="personal_info.php">Register</a> </li>
		<li><a href="personal_info.php">Update</a> </li>
		<li><a href="change_password.php">Change Password</a> </li>
		<!--<li><a href="generate_report.php">Generate Report</a> </li>-->
		<li><a href="help.php">Help</a> </li>
		<li><a href="logout.php">Log Out</a> </li>
	</ul>
	
</div>



<div class = "main">

	<p style="text-align: center;font-weight: bolder;margin-top: 0px;"> Welcome Record Officer <?php echo $_SESSION['name'] ?>!</p>
	<p style="text-align: center;font-weight: bolder;margin-top: 0px;"> <i> Here is some general information that helps you how to interact to this web app!! </i> </p>
	<div style="text-align: left;margin-left: 50px;margin-top: 0px;">
		<img src="image/righticon.png" style="width: 15px;height: 15px;text-align: center;"> <b> Register employee profile:- </b> You can simply register employee profiles like personal info, residential information, educational,guaranter information by simply hitting the register link then press the add button then empty row will be displayed then you have to fill the required information finally you need to hit the insert button.then the system will notify if you are correctly register the data. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;text-align: center;"> <b> Update employee profile:- </b> You can simply update employee profiles like personal info, residential information, educational,guaranter information by simply hitting the update link then simply click on the data that you want to updat finally the system will notify if you are correctly update the data. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;text-align: center;"> <b> Delete employee profile:- </b> You can simply delete employee profiles like personal info, residential information, educational,guaranter information by simply clicking the delete button on the data that you want to delete finally the system will notify if you are correctly delete the data. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> Change password </b>You can change your own password at any time by filling the required information.<br>
	</div>

</div>

<div id= "left-side-menu-for-employee">
<!--
	<ul>
		<p style="color: white;text-align: center;font-size: 20px">----------------</p>
		<li><a href="home.php"> Home </a> </li> <br>
		<li><a href="help.php"> Help </a> </li>
		<p style="color: white;text-align: center;font-size: 20px">----------------</p>
	</ul>
-->
</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>