<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE = edge">
 	<meta name="viewport" content="width = device-width,initial-scale = 1">
 	<!--<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">-->
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
<script type="text/javascript" src=""bootstrap-4.3.1-dist/js/bootstrap.min.js""></script>
<div id = "header">
	<img class = "hrlogo" src="image/HR.png">
	<img class = "wldulogo" src="image/logo.jpg">
	<!--<img style="vertical-align: center;" class = "header-image" src="image/Header_image2.png"> -->
	<h1 id = "h1-heading" style="text-align: center;font-weight: bolder;font-family: Stencil;color: white;padding: 10px;"> Woldia University Human Resource Management System</h1>
</div>


<div id = "navbar">
	<ul>
		<li><a href="index.php"> Home </a> </li>
		<li><a href="about.php"> About Us </a> </li>
		<li><a href="contact.php"> Contact Us </a> </li>
		<li><a href="vacancy.php"> Vacancy </a> </li>
		<li><a href="comment.php"> Comment </a> </li>
		<li><a href="apply.php"> Apply </a> </li>
		<li><a href="login.php"> Log in </a> </li>
		<li><a href="help.php"> Help </a> </li>
	</ul>
</div>

<div class = "main">
	
	<!DOCTYPE html>
<html>
<head>
	<title> Reset Password</title>
</head>
<body>
	<form method="POST" style="text-align: center;">
		<!--<fieldset style="margin-left: 350px;width: 100px">
			<legend style="font-family: times new romans;font-size: 20px;font-weight: bolder;"> Login Form</legend> -->
		<div id = "log" style="	border-color: black;
						border-style: solid;
						margin-left: 300px;
						border-radius: 10px;
						width: 50%;"	>
		<table style="margin-left: 0px">
			<tr>
				<!--<td rowspan="2"> <img style="box-s hadow: 0px 0px 0px 0px white;"height="100" src="kkk.gif" /> </td> -->
				<td> <strong>Password:</strong> </td>
				<td> <input type="Password" name="password" placeholder=" Enter New Password" autocomplete = "off" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>
			<tr>
				<td> <strong>Confirm Password:</strong> </td>
				<td> <input type="Password" name="confirm_password" placeholder="Confirm Password here" style="font-size: 20px;font-family: times new romans;" > </td>
			</tr>
			<tr>
				<td></td>
				<!--<td> 
					<form method = "POST">
					 	<a href="requsetReset.php">Forgot Password?</a> 
					</form>
				</td>
				-->
				<td> <input type="submit" name="submit" value="Reset Password" style="font-size: 20px;font-weight: bolder;font-family: times new romans";></td>
			</tr>
		</table>
		</div>
		<!--
		<img style="box-shadow: 0px 0px 0px 0px white;"height="100" src="kkk.gif" />
		<strong>Username:</strong><input type="text" name="username" placeholder="User name"> <br>
		<strong>Password:</strong><input type="Password" name="password" placeholder="Password"> <br>
		<input type="submit" name="login" value="Login"> -->
	</form> 
<?php
	include("config.php");
	if (!isset($_GET["code"])) {
		echo "Can not find the page1!";
	}

	$code = $_GET["code"];

	$getEmailQuery = mysqli_query($con, "SELECT email FROM resetPassword WHERE code = '$code'");
	if (mysqli_num_rows($getEmailQuery) == 0) {
		echo "Can not find the page2!";
	}
	/* if (isset($_POST["password"]) && isset($_POST["confirm_password"])) {
		$pw = $_POST["password"];
		$cpw = $_POST["confirm_password"];
		if ($pw == $cpw) {
			$pw = md5($pw);
			$row = mysqli_query($con, "UPDATE users SET password = '$pw' WHERE email = '$email'");
			
			if ($query) {
				$query = mysqli_query($con, "DELETE FROM resetPassword WHERE code = '$code'");
				exit("Password Updated!");
			}
			else{
				exit("Something went wrong!");
			}
		}
	}	*/
	if (isset($_POST["password"])) {
		$pw = $_POST["password"];
		$pw = md5($pw);

		$row = mysqli_fetch_array($getEmailQuery);
		$email = $row["email"];

		$query = mysqli_query($con, "UPDATE users SET password = '$pw' WHERE email = '$email'");

		if ($query) {
			$query = mysqli_query($con, "DELETE FROM resetPassword WHERE code = '$code'");
			echo "Password Updated!";
		}
		else{
			echo "Something went wrong!";
		}
	}
	error_reporting("0");
?>
</div>
<div id = "left-side-menu">

</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>