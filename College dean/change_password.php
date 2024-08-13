  <?php
    session_start();
    if(!isset($_SESSION['user'])){
    ?>
      <script> alert("You are are not logged in please login first!!") </script>
    <?php
      header("location:../login.php");
      }
    ?>

<?php
	include("connection.php");  
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

<style>
	body {font-family: Arial, Helvetica, sans-serif;}

	input[type=text], select, textarea {
	    width: 100%;
	    padding: 10px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-sizing: border-box;
	    margin-top: 6px;
	    margin-bottom: 10px;
	    resize: vertical;
		color:black;
		font-family:"Time New Roman";
		font-size:16px;
	}
	input[type=password], select, textarea {
	    width: 100%;
	    padding: 10px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-sizing: border-box;
	    margin-top: 6px;
	    margin-bottom: 10px;
	    resize: vertical;
		color:black;
		font-family:"Time New Roman";
		font-size:16px;
	}

	input[type=submit] {
	    background-color: #4CAF50;
	    color: white;
	    padding: 12px 20px;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	    font-weight: bold;
	    font-size: 15px;
	}
	label{
		font-family:"Time New Roman";
	}
	input[type=submit]:hover {
	    background-color: #45a049;
	}

	.main {
	    border-radius: 5px;
	    //background-color: #f2f2f2;
	    padding: 20px;
	}
	h3
	{
		font-family:"Time New Roman";
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

<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("wldu_hrms",$con);
	$num=0;
	$a=mysql_query("select * from announcement where status = '0'") or die(mysql_error());
	while($rows1=mysql_fetch_array($a))
	{
		$num=mysql_num_rows($a);
		$num=$num++;
	}

		//echo "<b ><a href='View_feedback.php' style='color: red'>view( $num )new feedbacks.</a></b>";
?>

<div id = "navbar">
	<ul>
		<li><a href="home.php"> Home </a> </li>
		<li>
			<?php 
				echo "<a href='view_announcement.php'>Announcement($num)</a>";
			?> 
		</li>
		<li><a href="employee_request.php"> Employee Request </a> </li>
		<li><a href="change_password.php"> Change Password </a> </li>
		<li><a href="help.php"> Help </a> </li>
		<li><a href="logout.php"> Log Out </a> </li>
	</ul>
</div>



<div class = "main">

<form method="POST" action="change_password.php">
<div style="margin-left: 100px;border-style: solid;border-radius: 4px;border-width: 4px;width: 600px;height: 320px;">
<table style="margin-left: 0px;align-content: center;align-items: right;padding: 50px;padding-top: 20px;">
	<tr>
		<td><label for="email">Email</label></td>
    	<td><input type="text" id="email"  name="email"  placeholder="Wirte your email here"> <span class="error"> </span></td>
	</tr>

	<tr>
		 <td><label for="opassword">Old Password  </label></td>
    	<td><input type="password" id="opassword" name="opassword" placeholder="Write your old password here"> <span class="error"> </span></td>
	</tr>

	<tr>
		 <td><label for="npassword">New Password  </label></td>
    	<td><input type="password" id="npassword" name="npassword" placeholder="Write your New password here"> <span class="error"> </span></td>
	</tr>

	<tr>
		 <td><label for="cpassword">Confirm Password  </label></td>
    	<td><input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password here"> <span class="error"> </span></td>
	</tr>
    <tr>
    	<td></td>
    	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="save" value="Save"></td>
    </tr>
    
 </table>
</div>
</form>


</div>

<div id = "left-side-menu"  style="
	margin-top: -390px;
	height: 390px;">
</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

<?php
	$con=mysql_connect('localhost','root','');
	if(!$con){ 
	die("coud not connect".mysql_error());
	}
	mysql_select_db("wldu_hrms",$con);

 	if (isset($_POST['save'])) {
 		$email = $_POST['email'];
 		$opassword = $_POST['opassword'];
 		$npassword = $_POST['npassword'];
 		$cpassword = $_POST['cpassword'];

 		$data = mysql_query("SELECT * FROM users WHERE email = '$email'");
		$info=mysql_fetch_array($data);
		$pass = $info['password'];
		$pass1 = md5($opassword);
		
/*
			if ($pass == $pass1) {
		 	echo "<script> alert('$pass') </script> ";
			}

*/
 		if ($npassword == $cpassword && $pass == $pass1) {
 			$npassword = md5($npassword);
 			$opassword1 = md5($opassword);
			
			
 			$result = mysql_query("UPDATE users SET password = '$npassword' WHERE email = '$email' AND password = '$opassword1'");
 			
 			if ($result) {
 				echo "<script> alert(' Password Updated Successfully!!') </script> ";
 			}
 			else{
 				echo "<script> alert('Error!!') </script> ";
 			}
		}

 	else
 	{
 			echo "<script> alert('-------ERROR-------\\nMay be the error is:\\n Password do not match\\n Incorrect Old Password!!\\n Incorrect Email \\n So, Please try again!') </script> ";
 	}
}
?>


</body>
</html>