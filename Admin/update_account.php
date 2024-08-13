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
		<li><a href="update_account.php"> Update account </a> </li>
		<li><a href="change_password.php"> Change password </a> </li>
		<li><a href="help.php"> Help </a> </li>
		<li><a href="logout.php"> Log out </a> </li>
	</ul>
</div>



<div class = "main">
	<h1 style="text-align: center;"> Welcome to update account page</h1>
	<p> here is some notes <br>that you have to read</p>

</div>
<div id = "left-side-menu">

	<ul>

		<h2 style="color: white;text-align: center;"> Other options:</h2>
		<p style="color: white;font-weight: bolder;text-align: center;">----------------------</p>
		<p style="color: white;font-weight: bolder;text-align: center;">----------------------</p>
		<li><a href="activate.php"> Activate </a> </li>	<br>
		<li><a href="activate.php"> Deactivate </a> </li>

	</ul>
	
</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>