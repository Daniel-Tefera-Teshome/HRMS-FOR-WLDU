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
#feedback{
	margin-left: -30px;	
}
.scrollable{
	height: 310px;
	overflow: auto;
}

	</style>

</head>
<body>
<div id = "header">
	<img class = "hrlogo" src="image/HR.png">
	<img class = "wldulogo" src="image/logo.jpg">
	<!--<img style="vertical-align: center;" class = "header-image" src="image/Header_image2.png"> -->
	<h1 id = "h1-heading" style="text-align: center;font-weight: bolder;font-family: Stencil;color: white;"> Woldia University Human Resource Management System</h1>
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
	
	<!--new-->	<!--
	<p style="text-align: center;margin-top: 0px;margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;padding: 10px;font-weight: bolder;font-size: 20px;font-family: times new romans"> This is comment from users:</p>
-->
<table border='1' cellpadding=0 >
	<tr style='background-color: #246f6b;color:#fffdfd '>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Content  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</th>
	</tr>
</table>

<div class='scrollable'>

		<form> 
	<?php
	$con=mysql_connect('localhost','root','');
	if(!$con){ 
	die("coud not connect".mysql_error());
	}
	mysql_select_db("wldu_hrms",$con);
	$data=mysql_query("SELECT * FROM feedback")or die(mysql_error());
	mysql_query("UPDATE feedback SET status = '1' WHERE status = '0'");
	print "<table border='1' cellpadding=3 >";

	while($info=mysql_fetch_array($data)){
	print "<tr>";
	print "<td>".$info['email'];
	print "<td>".$info['comment'];
	}
	print "</tr>";
	print "</table>";
	mysql_close($con);
	?>	
		</form>
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