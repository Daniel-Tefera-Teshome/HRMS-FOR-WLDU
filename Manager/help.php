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
	<p style="text-align: center;font-weight: bolder;"> Welcome Manager!</p>
	<p style="text-align: center;font-weight: bolder;"> <i> Here is some information that helps you how to interact to this web app!! </i> </p>
	<div style="text-align: left;margin-left: 50px;">
		<img src="righticon.png" style="width: 15px;height: 15px;text-align: center;"> <b> Approve Leave Request:- </b> You can simply approve leave requests by selecting from the drop down box and you will get notification for new requests. <br/>
		<img src="righticon.png" style="width: 15px;height: 15px;"> <b> Approve Employee Request:- </b> You can simply approve employee requests by selecting from the drop down box and you will get notification for new requests. <br/>
		<img src="righticon.png" style="width: 15px;height: 15px;"> <b> View Report:- </b> You can generate different type of six month or annual reports and print the report that you want. <br/>
		<img src="righticon.png" style="width: 15px;height: 15px;"> <b> View Feedback:- </b> You can see feedback from different applicants with respect to thier email. <br/>
		<img src="righticon.png" style="width: 15px;height: 15px;"> <b> View Applicant:- </b> You can see applicants with their detail information and documents like CV,Cirteficate... <br/>
		<img src="righticon.png" style="width: 15px;height: 15px;"> <b> Post Vacancies:- </b> You can post different vacancies by simply filling the form then pressing the post button. <br/>
		<img src="righticon.png" style="width: 15px;height: 15px;"> <b> Post Announcement:- </b> You can post different Announcement by simply filling the form then pressing the post button. <br/>
		<img src="righticon.png" style="width: 15px;height: 15px;"> <b> Change password </b>You can change your own password at any time by filling the required information.

	</div>



</div>

<div id = "left-side-menu" style="
	margin-top: -360px;
	height: 360px;">
</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>