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
	<p style="text-align: center;font-weight: bolder;margin-bottom: 0px;margin-top: 0px;font-size: 25px;font-family: times new romans"> Woldia University Contact Information</p>
	<div  style="margin-left: 200px;border-style: solid;border-radius: 4px;border-width: 4px;width: 800px;height: 300px;">
		
		<table>
				<tr>
					<th>
						<div style="text-align: left;">
							<p style="font-size: 20px;font-weight: bolder;font-family: times new romans;margin-bottom: 0px;"> <u><i>University Contact List</i> </u> </p>

							+251919319791 <br>
							+251932548788 <br>
							+251944548792 <br>
							+251910254732 <br>
							+251910254732 <br>
							+251910254732 

						</div>
					</th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
					<th></th><th></th>	<th></th><th></th>	<th></th><th></th>
				
					<style type="text/css">
					#link{
						text-align: center;
						border-radius: 5px;
						padding: 5px;
						list-style-type: none;
						margin-left: 50px;
						margin-right: 50px;
						margin-top: 4px;
						margin-bottom: 4px;
						
					}

					a{
						text-decoration: none;
						font-family: times new romans;
						font-size: 23px;
						color: white;
						padding: .5em 1.3em;
						transition:2s,transform 0.5s 1s;
						cursor: pointer;
						color: blue;						
					}

					a:hover{
						font-family: times new romans;
						font-size: 23px;
						color: black;
						background-color: pink;
						border-radius: 5px;
						transform: rotate(360deg);
						margin-left: 10px;
						margin-right: 10px;

					}
					#icon{
					 color: grey;
					}
					#links a{
					 color: blue;
					}


					</style>
					
					<th>
						<p style="font-size: 20px;font-weight: bolder;font-family: times new romans;margin-bottom: 0px;"> <u><i> Join us on social media </i> </u></p>
						<div id="links" style="text-align: left;margin-bottom: 0px;">
							<a id="link" href="http://www.facebook.com/wldu" title="Join Us on Facebook" target="blank"><font> <i id="icon" class="fa fa-facebook"></i></font> facebook </a><br>
							<a id="link" href="http://www.gmail.com/wldu" title="Join Us on Gmail" target="blank"> <font> <i id="icon" class="fa fa-inbox"></i></font> Gmail </a><br>
							<a id="link" href="http://www.wldu.edu.et" title="Join Us on Our Website" target="blank"> <font> <i id="icon" class="fa fa-google"></i></font> Website </a><br>
							<a id="link" href="http://www.telegram.com/wldu" title="Join Us on Telegram" target="blank"> <font> <i id="icon" class="fa fa-telegram"></i></font> Telegram </a><br>
							<a id="link" href="http://www.tweeter.com/wldu" title="Join Us on Tweeter" target="blank"> <font> <i id="icon" class="fa fa-twitter-square"></i></font> Tweeter </a><br>
							<a id="link" href="http://www.instagram.com/wldu" title="Join Us on instagram" target="blank"> <font> <i id="icon" class="fa fa-instagram"></i></font> Instagram </a>
							
						</div>
					</th>			
				</tr>
		</table>
	</div>
</div>



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
						<div style="text-align: left;margin-bottom: 0px;margin-left: -50px">
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