<?php
session_start();
include('conn.php'); 

?>

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
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
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
<!--<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script> -->
<div id = "header">
	<img class = "hrlogo" src="image/HR.png">
	<img class = "wldulogo" src="image/logo.jpg">
	<!--<img style="vertical-align: center;" class = "header-image" src="image/Header_image2.png"> -->
	<h1 id = "h1-heading" style="text-align: center;font-weight: bolder;font-family: Stencil;color: white;padding: 10px;"> Woldia University Human Resource Management System</h1>
</div>

<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("wldu_hrms",$con);
	$num=0;
	$a=mysql_query("select * from vacancy where Status = 'open'") or die(mysql_error());
	while($rows1=mysql_fetch_array($a))
	{
		$num=mysql_num_rows($a);
		$num=$num++;

	}

?>

<div id = "navbar">
	<ul>
		<li><a href="homel.php"> Home </a> </li>
		<li><a href="aboutl.php"> About Us </a> </li>
		<li><a href="contactl.php"> Contact Us </a> </li>
		
		<li><a href="login.php"> Log in </a> </li>
		<li><a href="helpl.php"> Help </a> </li>
	</ul>
</div>



<div class = "main">
	<!--<h1 style="text-align: center;"> Welcome to log in page</h1>-->

	<form  method="POST" style="text-align: center;">
		<!--<fieldset style="margin-left: 350px;width: 100px">
			<legend style="font-family: times new romans;font-size: 20px;font-weight: bolder;"> Login Form</legend> -->
		<div id = "log" style="	border-color: black;
						border-style: solid;
						margin-left: 300px;
						border-radius: 10px;
						width: 50%;"	>
		<table style="margin-left: 0px">
			<tr>
				<td rowspan="2"> <img style="box-shadow: 0px 0px 0px 0px white;"height="100" src="kkk.gif" /> </td>
				<td> <strong>Username:</strong> </td>
				<td> <input  type="text" autocomplete="off" name="username"   placeholder="User name" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>
			<tr>
				<td> <strong>Password:</strong> </td>
				<td> <input type="Password" name="password" placeholder="Password" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>
			<tr>
				<td></td>
				<td><a href="requsetReset.php">Forgot </a></td>

				<td> <input type="submit" name="login" value="Login" style="font-size: 20px;font-weight: bolder;font-family: times new romans";></td>
			</tr>
		</table>
		</div>
		<!--
		<img style="box-shadow: 0px 0px 0px 0px white;"height="100" src="kkk.gif" />
		<strong>Username:</strong><input type="text" name="username" placeholder="User name"> <br>
		<strong>Password:</strong><input type="Password" name="password" placeholder="Password"> <br>
		<input type="submit" name="login" value="Login"> -->
	</form> 
	<!--</fieldset> -->
</div>



	<?php
	class Login{

		function log(){		

			$username = "";
			$password = "";
			$password_hash = "";
			$query = "";
			$query_run = "";
			$query_num_rows = 0;
			$role = "";
			$status = "";
			$name = "";
			$email = "";
			

			if (isset($_POST["login"])) {
				
				if(isset($_POST["username"]) && isset($_POST["password"])){
					$username = $_POST['username'];
					$password = $_POST['password'];
					$password_hash = md5($password);

					if(!empty($username) && !empty($password)){
						//echo "string";
						$query = "SELECT `id` ,`status` ,`name` ,`email` , `role` FROM `users` WHERE `username` = '$username' AND `password` = '$password_hash'";


						if($query_run = mysql_query($query)){
							//echo "string";
							$query_num_rows = mysql_num_rows($query_run);
							if($query_num_rows == 0){
								//echo "invalid username and Password combination";
								echo ' <script> alert("Incorrect username and Password!!") </script>';
							}
							else
							{
								//echo "OK fine! You are logged in now!!";
								$role = mysql_result($query_run, 0, 'role');
								$status = mysql_result($query_run, 0, 'status');
								$name = mysql_result($query_run, 0, 'name');
								$email = mysql_result($query_run, 0, 'email');

								//When the manager is active redirect to the manager page
								if($role == "manager" && $status == "1"){
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:Manager/home.php');
								}

								//Manager is deactivated by the admin
								elseif ($status == "0" && $role == "manager") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}
								//When the admin is active redirect to the admin page
								elseif ($role == "admin" && $status == "1") {
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:admin/home.php');
								}

								//admin is deactivated by the admin itself or by another admin
								elseif ($status == "0" && $role == "admin") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}

								//When the record officer is active redirect to the record officer page
								elseif ($role == "record_officer" && $status == "1") {
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:record officer/home.php');
								}

								//record officer is deactivated by the admin 
								elseif ($status == "0" && $role == "record_officer") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}

								//When the employee is active redirect to the employee page
								elseif ($role == "employee" && $status == "1") {
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:employee/home.php');
								}

								//employee is deactivated by the admin 
								elseif ($status == "0" && $role == "employee") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}

								//When the college dean is active redirect to the college dean page
								elseif ($role == "college_dean" && $status == "1") {
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:college dean/home.php');
								}

								//college dean is deactivated by the admin 
								elseif ($status == "0" && $role == "college_dean") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}

							}
						} 
					}else{
						echo ' <script> alert("Please fill User Name and Password first to log in!!") </script>';
						//echo "failed";
					}
			/*$q = "SELECT * FROM `users` WHERE `username` = ".$username."' AND `password` = ".$password."";
			$r = mysql_query($q);
			$d = mysql_fetch_array($r,$con);
			$_SESSION['name'] = $d['name'];*/
				}
			}
			error_reporting(0);
		}
	}
	$l = new Login();
	$l->log();
  ?>

<div id = "left-side-menu">

<style type="text/css">
			#link{
						text-align: center;
						border-radius: 5px;
						padding: 5px;
						list-style-type: none;
						margin-top: 4px;
						margin-bottom: 4px;
						
					}

					a{
						text-decoration: none;
						font-family: times new romans;
						font-size: 20px;
						color: white;
						padding: .5em 1.3em;
						transition:2s,transform 0.5s 1s;
						cursor: pointer;
					}

					a:hover{
						font-family: times new romans;
						font-size: 20px;
						color: black;
						background-color: pink;
						border-radius: 5px;
						transform: rotate(360deg);
						
					}
					#icon{
					 color: grey;
					 text-align: left;

					}


</style>
	<div>
		<table>
				<tr>
					<th>
							<p style="font-size: 20px;font-weight: bolder;font-family: times new romans;margin-bottom: 0px;color: white;"> <u><i> Join us on social media </i> </u></p><br>
						<div style="text-align: left;margin-bottom: 0px;">
							<a id="link" href="http://www.facebook.com/wldu" title="Join Us on Facebook" target="blank"><font> <i id="icon" class="fa fa-facebook"></i></font> facebook </a><br><br>
							<a id="link" href="http://www.gmail.com/wldu" title="Join Us on Gmail" target="blank"> <font> <i id="icon" class="fa fa-inbox"></i></font> Gmail </a><br><br>
							<a id="link" href="http://www.wldu.edu.et" title="Join Us on Our Website" target="blank"> <font> <i id="icon" class="fa fa-google"></i></font> Website </a><br><br>
							<a id="link" href="http://www.telegram.com/wldu" title="Join Us on Telegram" target="blank"> <font> <i id="icon" class="fa fa-telegram"></i></font> Telegram </a><br><br>
							<a id="link" href="http://www.tweeter.com/wldu" title="Join Us on Tweeter" target="blank"> <font> <i id="icon" class="fa fa-twitter-square"></i></font> Tweeter </a><br><br>
							<a id="link" href="http://www.instagram.com/wldu" title="Join Us on instagram" target="blank"> <font> <i id="icon" class="fa fa-instagram"></i></font> Instagram </a>
							
						</div>
					</th>			
				</tr>
		</table>
	</div>

</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>