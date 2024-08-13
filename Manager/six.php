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

	.shadow{
		 // text-shadow: 2px 4px 6px #ffff00;
	}

	</style>

</head>
<body>
<div id = "header">
	<img class = "hrlogo" src="image/HR.png">
	<img class = "wldulogo" src="image/logo.jpg">
	<!--<img style="vertical-align: center;" class = "header-image" src="image/Header_image2.png"> -->
	<h1 class="shadow" id = "h1-heading" style="text-align: center;font-weight: bolder;font-family: Stencil;color: white;padding: 10px;"> Woldia University Human Resource Management System</h1>
</div>


<div id = "navbar">
	<ul>
		<li><a href="home.php"> Home </a> </li>
		<li><a href="approve.php"> Approve </a> </li>
		<li><a href="view.php"> View </a> </li>
<!--	<li><a href="approve_employee_request.php"> Approve Employee Request </a> </li> -->
		<li><a href="post.php"> Post </a> </li>
<!--	<li><a href="view_report.php"> View Report </a> </li>
		<li><a href="view_employee_information.php"> View Employee Info </a> </li>
		<li><a href="register_employee.php"> Register Employee </a> </li>
		<li><a href="post_vacancy.php"> Post Vacancy </a> </li> 	-->
		<li><a href="change_password.php"> Change Password </a> </li>
		<li><a href="help.php"> Help </a> </li>
		<li><a href="logout.php"> Log out </a> </li>
	</ul>
</div>



<div class = "main">
<h3 style="text-align: center;">Six month report list:</h3>
<div style="text-align: left;margin-left: 400px; padding:5px;">
<img src="righticon.png" style="width: 15px;height: 15px;">
<a style="text-decoration: none;" href="six.terminated.employee.report.php" target="_blank"> በዚህ ግማሽ አመት ስራቸውን የለቀቁ ሰራተኞች ስም ዝርዝር</a><br>
<img src="righticon.png" style="width: 15px;height: 15px;">
<a style="text-decoration: none;" href="app.report.php" target="_blank">በዚህ ግማሽ አመት ለክፍት ስራ ቦታዉ ያመለከቱ አመልካቾች</a><br>
<img src="righticon.png" style="width: 15px;height: 15px;">
<a style="text-decoration: none;" href="approved.leave.report.php " target="_blank">በዚህ ግማሽ አመት ፍቃድ የጠየቁ እና ጥያቄያቸው የጸደቀላቸው</a><br>
<img src="righticon.png" style="width: 15px;height: 15px;">
<a style="text-decoration: none;" href="rejected.leave.report.php " target="_blank">በዚህ ግማሽ አመት ፍቃድ የጠየቁ እና ጥያቄያቸው ያልጸደቀላቸው</a><br>
<img src="righticon.png" style="width: 15px;height: 15px;">
<a style="text-decoration: none;" href="report.dep.php" target="_blank">በዚህ ግማሽ አመት ክፍት የስራ ቦታው በሰራተኛ እንዲሞላ የጠየቁ የስራ ክፍሎች</a><br>
<img src="righticon.png" style="width: 15px;height: 15px;">
<a style="text-decoration: none;" href="report.rejected.php" target="_blank">በዚህ ግማሽ አመት ክፍት የስራ ቦታው በሰራተኛ እንዲሞላ ጠይቀው ጥያቄያቸው ያልጸደቀላቸው<br>
	<img src="righticon.png" style="width: 15px;height: 15px;">
<a style="text-decoration: none;" href="report.approved.php " target="_blank">በዚህ ግማሽ አመት ክፍት የስራ ቦታው በሰራተኛ እንዲሞላ ጠይቀው ጥያቄያቸው የጸደቀላቸው</a><br>
<img src="righticon.png" style="width: 15px;height: 15px;">
<a style="text-decoration: none;" href="report.vacancy.php " target="_blank">በዚህ ግማሽ አመት የወጡ የስራ ማስታወቂያዎች</a>
</div>

</div>

<?php
	$con=mysql_connect("localhost","root","");
mysql_select_db("wldu_hrms",$con);
$num=0;
$a=mysql_query("select * from feedback where status = '0'") or die(mysql_error());
while($rows1=mysql_fetch_array($a))
{
$num=mysql_num_rows($a);
$num=$num++;

}

	//echo "<b ><a href='View_feedback.php' style='color: red'>view( $num )new feedbacks.</a></b>";
?>

<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("wldu_hrms",$con);
	$numm=0;
	$a=mysql_query("select * from applicant where status = 'unseen'") or die(mysql_error());
	while($rows1=mysql_fetch_array($a))
	{
	$numm=mysql_num_rows($a);
	$numm=$numm++;

	}

	//echo "<b ><a href='View_feedback.php' style='color: red'>view( $num )new feedbacks.</a></b>";
?>


<div id = "left-side-menu" style="
	margin-top: -360px;
	height: 360px;">

	<ul>
		<h2 style="color: white;text-align: center;"> View options:</h2>
		<p style="color: white;text-align: center;font-size: 20px;">------------------</p>
		<p style="color: white;text-align: center;font-size: 20px;">------------------</p>
		<li><a href="view_report.php"> Report </a> </li>	<br>
		
		<li>
			<?php 
				echo "<a href='View_feedback.php'>Feedback($num)</a>";
			?>
		</li> </br>

		<li>
			<?php 
				echo "<a href='View_applicant.php'>Aplicant($numm)</a>";
			?>
		</li>

	</ul>

</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>