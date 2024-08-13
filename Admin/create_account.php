	<?php
		session_start();
		if(!isset($_SESSION['user'])){
		?>
			<script> alert("You are are not logged in please login first!!") </script>
		<?php
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

		#left-side-menu ul{
			text-align: left;
			border-radius: 5px;
			padding: 0px;
			list-style-type: none;
			margin-left: 0px;
			margin-right: 0px;
			float: left;
			margin-top: 4px;
			margin-bottom: 4px;
			background-color: rgb(14,29,31);
		}

		#left-side-menu ul li{
			margin-left: -15px;
		}

		#left-side-menu ul li a{
			text-decoration: none;
			font-family: times new romans;
			font-size: 22px;
			color: white;
			padding: .5em 1.3em;
			transition:2s,transform 0.5s 1s;
			cursor: pointer;
			text-align: left;
			
		}

		#left-side-menu ul li a:hover{
			font-family: times new romans;
			font-size: 22px;
			color: black;
			background-color: white;
			border-radius: 10px;
			transform: rotate(360deg);
			margin-left: 0px;
			margin-right: 0px;

		}


		input[type=text],input[type=password] {
		border-bottom: solid;
		border-bottom-color: green;
		border-radius: 7px;
	}
	select{
		border-bottom: solid;
		border-bottom-color: green;
		border-radius: 7px;
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
		<li><a href="home.php"> Home </a> </li>
		<li><a href="create_account.php"> Create account </a> </li>
		<li><a href="activate.php"> Activate </a> </li>	
		<li><a href="activate.php"> Deactivate </a> </li>
		<!-- <li><a href="update_account.php"> Update account </a> </li> -->
		<li><a href="change_password.php"> Change password </a> </li>
		<li><a href="help.php"> Help </a> </li>
		<li><a href="logout.php"> Log out </a> </li>
	</ul>
</div>



<div class = "main">
	<SCRIPT language=Javascript>
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return true;

         return false;
         alert("You Can Not Type Number Here Only text is allowed!!")
         
      }
   </SCRIPT>
	<h3 style="text-align: center;"> To create an account Fill the following field: </h3>
	<!--
	<?php 
	//echo $_SESSION['message'];
	?> -->
	<form action="create_account.php" method="POST" style="text-align: center;">
		<!--<fieldset style="margin-left: 350px;width: 100px">
			<legend style="font-family: times new romans;font-size: 20px;font-weight: bolder;"> Login Form</legend> -->
		<div id = "log" style="	border-color: black;
						border-style: solid;
						margin-left: 300px;
						border-radius: 10px;
						width: 50%;"	>
		<table style="margin-left: 0px">
			<tr  style="text-align: left;">
				<!--<td rowspan="2"> <img style="box-shadow: 0px 0px 0px 0px white;"height="100" src="kkk.gif" /> </td> -->
				<td> <strong>Name:</strong> </td>
				<td> <input type="text" name="name" onkeypress="return isNumberKey(event)" placeholder=" Enter Your name here" autocomplete = "off" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>
			
			<tr  style="text-align: left;">
				<td> <strong>Role:</strong> </td>
				<!--<td> <input type="text" name="role" placeholder=" Enter Your role here" style="font-size: 20px;font-family: times new romans;" required> 
				</td>-->
				<td>
					<select name="role" required style="font-size: 20px;width: 245px; font-family: times new romans;" placehoder = "Select the role here">
						<optgroup label = "Select The Role Here">
						<option value="manager" name = "role" style="font-size: 20px;font-family: times new romans;">Manager</option>
						<option value="admin" name = "role" style="font-size: 20px;font-family: times new romans;">Admin</option>
						<option value="record_officer" name = "role" style="font-size: 20px;font-family: times new romans;">Record_Officer</option>
						<option value="employee" name = "role" style="font-size: 20px;font-family: times new romans;">Employee</option>
						<option value="college_dean" name = "role" style="font-size: 20px;font-family: times new romans;">College_Dean</option>
					
					</select>
				</td>
			</tr>

			<tr  style="text-align: left;">
				<td> <strong>Username:</strong> </td>
				<td> <input type="text" name="username" placeholder=" Enter Your Username here" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>

			<tr  style="text-align: left;">
				<td> <strong>Email:</strong> </td>
				<td> <input type="email" name="email" placeholder=" Enter Your Email here" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>

			<tr  style="text-align: left;">
				<td> <strong>Password:</strong> </td>
				<td> <input type="password" name="password" placeholder=" Enter Your password here" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>

			<tr  style="text-align: left;">
				<td> <strong>Confirm Password:</strong> </td>
				<td> <input type="password" name="confirmpassword" placeholder=" Confirm Your password  here" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>

			<tr  style="text-align: left;">
				<td></td>
	
				<td> <input type="submit" name="register" value="Register" style="font-size: 20px; cursor: pointer;background-color: rgb(36,41,251); border-radius: 5px; font-weight: bolder;font-family: times new romans";></td>
			</tr>
		</table>
		</div>

	</form>

</div>
<div id = "left-side-menu">

</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

<?php
	require 'config.php';
 	//session_start();
 	if (isset($_POST['register'])) {
 		$name = $_POST['name'];
 		$role = $_POST['role'];
 		$username = $_POST['username'];
 		$email = $_POST['email'];
 		$password = $_POST['password'];
 		$confirmpassword = $_POST['confirmpassword'];
 		if ($password == $confirmpassword) {
 			$password = md5($password);
			//$con = mysql_connect("localhost","root","","wldu_hrms");
			//if (!$con) {
			//	echo "something went wrong!";
			//}
 			$sql = "INSERT INTO `users` (name, role, username, email, password) VALUES ('$name', '$role', '$username', '$email', '$password')";
 			if(mysqli_query($con,$sql)) {
 				echo "<script> alert('The account is successfully created!') </script> ";
 			}
 			
 			else{
 				echo "<'some thing is went wrong!') </script> ";
 			}
 			//echo "<script> alert('The account is successfully created!') </script> ";
 			//$_SESSION['message'] = "You are now OK";
 		}else{
 			echo "<script> alert('The password do not match, Please try again!') </script> ";
 			//$_SESSION['message'] = "The password do not match, Please try again!";
 		}
 	}
?>

</body>
</html>