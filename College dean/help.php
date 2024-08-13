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
	<p style="text-align: center;font-weight: bolder;"> Welcome <?php echo $_SESSION['name'];?>!</p>
	<p style="text-align: center;font-weight: bolder;"> <i> Here is some information that helps you how to interact to this web app!! </i> </p>
	<div style="text-align: left;margin-left: 50px;">
		<img src="image/righticon.png" style="width: 15px;height: 15px;text-align: center;"> <b> Employee Request:- </b> You can simply ask the human resource by filling the required information in the form provided and finally hit the send button. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> Approve Employee Request:- </b> You can simply approve employee requests by selecting from the drop down box and you will get notification for new requests. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> View Announcement:- </b> You can see Announcement tat are posted from the manager. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> Help:- </b> You can get help full information here that helps you how to interact to the system if you are fresh to this system. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> Change password </b>You can change your own password at any time by filling the required information.<br>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> Log Out:- </b> You should have to log out from this system when you have finish your work every time for the security purpose. if you leave the system with out hitting the log out link any one can access and operate to the system as you can <br/>

	</div>



</div>

<div id = "left-side-menu">
</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>