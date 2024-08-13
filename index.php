<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>

	<title>WLDU HRMS</title>

	<link rel="stylesheet" type="text/css" href="hrmsstyle.css">
	<link rel="icon" type="img/png" href="image/logo.jpg"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />


	<style>
		* {box-sizing:border-box}
		body {font-family: Verdana,sans-serif;}
		.mySlides {display:none}

		/* Slideshow container */
		.slideshow-container {
		  max-width: 500px;
		  position: relative;
		  margin: auto;
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 15px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 13px;
		  width: 13px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4}
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4}
		  to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
			.text {
				font-size: 11px
			}
		}

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

	<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext">1 / 10</div>
	  <img src="image/slide-image1.jpg" style="margin-left: -250px; width:200%;height: 300px;" >
	  <div class="text">New Building can handle 7000 student at a time</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">2 / 10</div>
	  <img src="image/slide-image13.jpg" style="margin-left: -250px; width:200%;height: 300px;">
	  <div class="text">Auditerium Hall</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">3 / 10</div>
	  <img src="image/slide-image12.jpg" style="margin-left: -250px; width:200%;height: 300px;">
	  <div class="text">Natural Science Library</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">4 / 10</div>
	  <img src="image/slide-image4.jpg" style="margin-left: -250px; width:200%;height: 300px;">
	  <div class="text">New Teacher Staff</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">5 / 10</div>
	  <img src="image/slide-image5.jpg" style="margin-left: -250px; width:200%;height: 300px;">
	  <div class="text">ICT Center</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">6 / 10</div>
	  <img src="image/slide-image6.jpg" style="margin-left: -250px; width:200%;height: 300px;">
	  <div class="text">Huamn Resource Office</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">7 / 10</div>
	  <img src="image/slide-image14.jpg" style="margin-left: -250px; width:200%;height: 300px;">
	  <div class="text">Female Dormitary</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">8 / 10</div>
	  <img src="image/slide-image8.jpg" style="margin-left: -250px; width:200%;height: 300px;">
	  <div class="text">WLDU Main Gate</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">9 / 10</div>
	  <img src="image/slide-image9.jpg" style="margin-left: -250px; width:200%;height: 300px;">
	  <div class="text">Adminstrative Employee Office Highest Building in WLDU</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">10 / 10</div>
	  <img src="image/slide-image10.jpg" style="margin-left: -250px; width:200%;height: 300px;">
	  <div class="text">WLDU Employee Caffe</div>
	</div>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>	  
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	</div>

	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";
	    }
	    slideIndex++;
	    if (slideIndex> slides.length) {slideIndex = 1}
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";
	    dots[slideIndex-1].className += " active";
	    setTimeout(showSlides, 5000); // Change image every 5 seconds
	}
	</script>


</div>
<div id = "left-side-menu-for-indexx">
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
						<div style="text-align: left;margin-bottom: 0px;">
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
	<p style="text-align: center;margin-top: -7px;">&copy;2019 wlduhrms.com. All right reserved.</p>
</div>

</body>
</html>