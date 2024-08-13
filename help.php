<!DOCTYPE html>
<html>
<head>
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
		<li><a href="index.php"><font size=4 style="margin-left:-30px"><i class="fa fa-home"></i></font> Home </a> </li>
		<li><a href="about.php"><font size=4 style="margin-left:-30px"><i class="fa fa-list"></i></font> About Us </a> </li>
		<li><a href="contact.php"><font size=4><i class="fa fa-phone"></i></font> Contact Us </a> </li>
		<!--	<li><a href="vacancy.php"><font size=4><i class="fa fa-folder-open"></i></font> Vacancy </a> </li>	-->
		<li>
			<?php 
				echo "<a href='vacancy.php'><font color = 'white' size=4><i class='fa fa-folder-open'></i></font> Vacancy($num)</a>";
			?> 
		</li>
		<li><a href="comment.php"><font size=4><i class="fa fa-comment"></font></i> Comment </a> </li>
		<li><a href="apply.php"><font size=4><i class="fa fa-folder-open"></i></font> Apply </a> </li>
		<!--<li><a href="login.php"><font size=4><i class="fa fa-key icon"></font></i>  Log in </a> </li> -->
		<li><a href="help.php"><font size=4><i class="fa fa-question"></font></i> Help </a> </li>
	</ul>
</div>



<div class = "main">

<p style="text-align: center;font-weight: bolder;"> Welcome User!</p>
	<p style="text-align: center;font-weight: bolder;"> <i> Here is some information that helps you how to interact to this web app!! </i> </p>
	<div style="text-align: left;margin-left: 50px;">
		<img src="image/righticon.png" style="width: 15px;height: 15px;text-align: center;"> <b> About US:- </b> You can get some information about the woldia university by clicking the link. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> Contact Us:- </b> You can get contact information to the woldia university by clicking the link. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> Vacancy:- </b> You can see a vacancy that are posted from the univesity by clicking the link. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> Comment:- </b> You can give comments about the university what you think is important for the organization. <br/>
		<img src="image/righticon.png" style="width: 15px;height: 15px;"> <b> Apply:- </b> You can apply to the vacancies that you have seen in the vacancy page by filling the form properly and also you need to upload your file in pdf format only like CV and cirteficate. <br/>
		

</div>
<div id = "left-side-menu" style="
	margin-top: -250px;
	height: 360px;margin-left: -135px;">

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
						<div style="text-align: left;margin-bottom: 0px;">
							<p style="font-size: 20px;font-weight: bolder;font-family: times new romans;margin-bottom: 0px;color: white;"> <u><i> Join us on social media </i> </u></p><br>
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

<div id = "footer" style="margin-left: -135px;margin-top: 113px;width:1270px;">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>