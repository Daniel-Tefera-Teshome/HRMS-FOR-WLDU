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

<?php
	require "connection.php";
	mysql_query("UPDATE announcement SET status = '1' WHERE status = '0'");

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
	
<table border='1' cellpadding=0 >
	<tr style='background-color: #246f6b;color:#fffdfd '>
		<th width="95">Date</th>
		<th width="1193">Content</th>
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

			$data=mysql_query("SELECT * FROM announcement")or die(mysql_error());
			print "<table border='1' cellpadding=3 max-width = 1000>";

			while($info=mysql_fetch_array($data)){
			print "<tr>";
			print "<td>".$info['date'];
			print "<td>".$info['content'];
			}
			print "</tr>";
			print "</table>";
			mysql_close($con);
		?>	

	</form>
 </div>
</div>

<div id = "left-side-menu">
</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>