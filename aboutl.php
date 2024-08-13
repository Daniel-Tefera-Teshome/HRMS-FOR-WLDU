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
		#navbar ul li a:hover{
			font-family: times new romans;
			font-size: 25px;
			color: black;
			background-color: white;
			border-radius: 5px;
			transform: rotate(360deg);
			margin-left: 10px;
			margin-right: 10px;

		}
			.scrollable{
			height: 350px;
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
<div class="scrollable">
	<h2 style="text-align: center;font-weight: bolder;color: blue;"><u>Woldia University</u></h2>
	<p style="text-align: justify;margin-left:80px;margin-right: 80px;"> Woldia university was established through the council of ministers regulation no 223/2011 issued on may 26, 2004. Currently, the total area of the university is 196 hectares of land. Woldia university has two campuses, namely, the main campus called woldia university and the other one is Mersa campus of agriculture. It is 30 kms far from the main campus. The first batch of students, numbering 599, has been admitted to the university on Dec 10/2004 in fabulous reception ceremony involving invited guests city residents, representatives of different zone & Woreda administrative offices and universities community. Students have been placed in to four faculties and 12 departments. In its second year of operation, the university admitted over 1457 new students. The number of faculties grew in to six, the two newly added being the faculty of agriculture and pedagogical and behavioral science faculty. Likewise, the number of departments doubled in to 24. Currently, the university has a student population of over 4300. The university is anticipated to contain a student population of 11,000 over a period of five years. More than 150 blocks are planned to be erected in different phases within the specified period. As the number of students and academic branch is increasing the employees who work in the university like teachers and administrative workers is also increase so, to manage those employees the work load of Woldia University human resource management office is become strongly hard that is why we are developing this web based system for the office.<br /> <h3 style="text-align: center;"> In 2011 E.C employee and administrative worker name list </h3>
		
		<table border="2" style="margin-left: 200px;width: 700px;text-align: center;">
			<tr>
				<th>No</th>
				<th>Level</th>
				<th>Amount</th>
				<th>Female</th>
				<th>Male</th>
			</tr>

			<tr>
				<td>1</td>
				<td>President</td>
				<td>1</td>
				<td>-</td>
				<td>1</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Vice President</td>
				<td>4</td>
				<td>-</td>
				<td>4</td>
			</tr>

			<tr>
				<td>3</td>
				<td>Dean</td>
				<td>16</td>
				<td>-</td>
				<td>16</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Department Dean</td>
				<td>43</td>
				<td>-</td>
				<td>43</td>
			</tr>
			<tr>
				<td>5</td>
				<td> Teachers</td>
				<td>1478</td>
				<td>142</td>
				<td>1036</td>
			</tr>
			<tr>
				<td>6</td>
				<td> Professor</td>
				<td>1</td>
				<td>-</td>
				<td>1</td>
			</tr>
			<tr>
				<td>7</td>
				<td> Assistant Professor</td>
				<td>1</td>
				<td>-</td>
				<td>1</td>
			</tr>

			<tr>
				<td>8</td>
				<td> Doctor</td>
				<td>18</td>
				<td>-</td>
				<td>18</td>
			</tr>

			<tr>
				<td>9</td>
				<td> Sira kifil halafi</td>
				<td>36</td>
				<td>5</td>
				<td>31</td>
			</tr>
			<tr>
				<td>10</td>
				<td> Administrative employee</td>
				<td>875</td>
				<td>367</td>
				<td>568</td>
			</tr>
			<tr>
				<td>11</td>
				<td> Students</td>
				<td>12078</td>
				<td>4316</td>
				<td>7762</td>
			</tr>
			<tr>
				<td>12</td>
				<td> Board member</td>
				<td>8</td>
				<td>3</td>
				<td>5</td>
			</tr>
			<tr>
				<td>13</td>
				<td> Astebabari</td>
				<td>20</td>
				<td>-</td>
				<td>20</td>
			</tr>
			<tr>
				<td>14</td>
				<td> Group Leader</td>
				<td>14</td>
				<td>7</td>
				<td>7</td>
			</tr>
		</table>
	</p>
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

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>