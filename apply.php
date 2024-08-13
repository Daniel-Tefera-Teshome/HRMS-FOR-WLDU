<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WLDU HRMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="date.css" />
	<link rel="stylesheet" type="text/css" media="all" href="includes/jquery/jquery-ui-custom.css" />
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">  
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<script src="includes/jquery/jquery-1.10.2.js"></script>
	<script src="includes/jquery/jquery-ui-custom.js"></script>
	<script type="text/javascript" src="date.js"></script>

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

	<style>
	input[type=text],input[type=email],input[type=file],select{
	    width:500px;
	    padding: 15px;
	    margin: 5px 0 22px 0;
	    display: inline-block;
		color:black;
		font-family:"Time New Roman";
		font-size:20px;
		border-top: none;
	    border-left: none;
	border-bottom-color: rgba(0,0,0,0.12);
	  height:30px;
	      padding: 3px 0 5px;
	    border-right: none;
	  outline: 0;
	}


	input[type=text]:focus {
	  border-right: none;
	   border-top: none;
	    border-left: none;
	  background-color: none;
	  border-height:800px;
	  outline: 0;
	    width: 100%;
		height:32px;
		border-bottom-color:#8e44ad;

	 
	  transition: 0.5s ease all;
	}


	input[type=email]:focus {
	  border-right: none;
	   border-top: none;
	    border-left: none;
	  background-color: none;
	  border-height:800px;
	  outline: 0;
	    width: 100%;
		height:32px;
		border-bottom-color:#8e44ad;

	 
	  transition: 0.5s ease all;
	}

	select:focus {
	  border-right: none;
	   border-top: none;
	    border-left: none;
	  background-color: none;
	  border-height:800px;
	  outline: 0;
	    width: 100%;
		height:32px;
		border-bottom-color:#8e44ad;

	 
	  transition: 0.5s ease all;
	}


	input[type=submit],input[type=reset]{
	    width: 100%;
	    background-color: #4CAF50;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	}
	input[type=reset] {
		background-color:red;
	}
	input[type=submit]:hover {
	    background-color: #45a049;
	}
	input[type=reset]:hover {
	    background-color:#DC143C;
	}
	div {
	    border-radius: 1px; 
	    padding: 0px;
	}
	input[type=submit],input[type=reset] {
	    width: 100%;
	    background-color: #4CAF50;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	}
	input[type=reset] {
		background-color:red;
	}
	input[type=submit]:hover {
	    background-color: #45a049;
	}
	input[type=reset]:hover {
	    background-color:#DC143C;
	}
	.modal-content {
	    background-color: #fefefe;
	    margin: 1% auto 1% auto; /* 5% from the top, 15% from the bottom and centered */
	    border: 1px solid #888;
	    width: 97%; /* Could be more or less, depending on screen size */
	}
	.close {
	    position: absolute;
	    right: 20px;
	    top: -7px;
	    font-size: 40px;
	    font-weight: bolder;
	    color: #f1f1f1;
	}

	.close:hover,
	.close:focus {
	    color: #f44336;
	    cursor: pointer;
	}
	.modal {
	    width:1125px;
	   /* Stay in place */
	    z-index: 1; /* Sit on top */
	    left: 500;
	    top: 2;

		height:340px;
	   /* Full width */
	    /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: #474e5d;
	    padding-top: 10px;

	}
	button {
	    background-color: #4CAF50;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 100%;
	    opacity: 0.9;
	}
	table{
		margin-left:10px;
		
	}
	button:hover {
	    opacity:1;
	}
	a[href=post.php] {
	    background-color: red;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 100%;
	    opacity: 0.9;
	}
	a:hover {
	    opacity:1;
	}
	h3{
		text-align:center;
	}
</style>
<style>

	.container {
	    display: block;
	    position: relative;
	    padding-left: 35px;
	    margin-bottom: 12px;
	    cursor: pointer;
	    font-size: 22px;
	   
	}

	.container input {

	    opacity: 0;
	    cursor: pointer;
	}

	.checkmark {
	    position: absolute;
	    top: 0;
	    left: 0;
	    height: 25px;
	    width: 25px;
	    background-color: #eee;
	    border-radius: 50%;
	}
	.container:hover input ~ .checkmark {
	    background-color: #ccc;
	}

	.container input:checked ~ .checkmark {
	    background-color: #2196F3;
	}

	.checkmark:after {
	    content: "";
	    position: absolute;
	    display: none;
	}
	.container input:checked ~ .checkmark:after {
	    display: block;
	}
	.container .checkmark:after {
	 	top: 9px;
		left: 9px;
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: white;
	}

</style>

</head>

<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
 <script>
   function isCharKey(evt)
{
       
   var charCode = (evt.which) ? evt.which : event.keyCode
if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)
//if (charCode > 64 && (charCode < 91 || charCode > 96))
            return true;
		else
		return false;

         

}
</script>



<?php
// define variables and set to empty values
$fErr=$mErr=$lErr=$sErr=$eErr=$cErr=$zErr=$vcErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	   if (empty($_POST["fname"]))
     {$fErr = "<b><font color='red'>Please Enter First Name</font></b>";}
    if (empty($_POST["mname"]))
     {$mErr = "<b><font color='red'>Please enter Middle name</font></b>";}
	   if (empty($_POST["lname"]))
     {$lErr = "<b><font color='red'>PLease enter  Last  name</font></b>";}
    if (empty($_POST["sex"]))
     {$sErr = "<b><font color='red'>PLease enter  Sex</font></b>";}
    if (empty($_POST["email"]))
     {$eErr = "<b><font color='red'>Please enter Email </font></b>";}
   if (empty($_POST["cgpa"]))
     {$cErr = "<b><font color='red'>PLease enter  Commulative GPA</font></b>";}
   if (empty($_FILE["files"]))
     {$zErr = "<b><font color='red'>PLease Select  A Document</font></b>";}
    if (empty($_FILE["file"]))
     {$vcErr = "<b><font color='red'>PLease Select  A Document</font></b>";}


}
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>




<?php
	include "connection.php";
if($fErr==TRUE)
echo " error please enter valid data";
elseif($lErr==TRUE)
echo "error please enter valid data ";
elseif($mErr==TRUE)
echo "error please enter valid data ";
elseif($sErr==TRUE)
echo "error please enter valid data ";
elseif($eErr==TRUE)
echo "error please enter valid data ";
elseif($cErr==TRUE)
echo "error please enter valid data ";
elseif($vcErr==TRUE)
echo "error please enter valid data ";

?>


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

<?php
	$vac_num;
	$con=mysql_connect("localhost","root","");
	mysql_select_db("wldu_hrms",$con);
	$a=mysql_query("select * from vacancy where Status = 'open'") or die(mysql_error());
	

?>




<div class = "main" style=" position: absolute; margin-top: 0px;width: 1125px">

	<div id="id01" class="modal">

	  <form method="POST"  action="Upload.php" enctype="multipart/form-data" class="modal-content"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<h3>Applicant Registration Form</h3>
	<table style="background-color:white;" width="97%" height="30px" align="center">
                    <td><?php echo $rows1['id'] ?></td>

	<tr>

	<td><label for="from"><b>Vacancy Number:</b></label></td> </tr>
		<tr>
	<!--
		<td>
			<input type="text" name="vnum" id="vnum" onKeyPress="return isNumberKey(event)"  placeholder="Write Vacancy Number Here"class="a" size="30"> <span class="error"> <?php echo $vcErr;?></span>
		</td>
	-->
	<td>
		<select name="vnum" required style="font-size: 20px;width: 245px; font-family: times new romans;" >
				<optgroup label = "Select Vacancy Number Here">
				
				<?php 
					while($rows2=mysql_fetch_array($a))
						{
							$vac_num = $rows2['ID'];
							print "<option value= $vac_num  name = 'vnum' style='font-size: 20px;font-family: times new romans;''>" .$vac_num;
						}
				 ?>
			</select>
	</td>
			
		</tr>

		<tr>
			<td>
				<label for="date"><b>Date</b></label>
			</td>
		</tr>
		<tr>
			<td ><input type="text" name="date" size="30"  readonly value="<?php echo date('Y-m-d')?>"><span class="error"></span></td>
		</tr>

	<td><label for="from"><b>First Name:</b></label></td> </tr>
		<tr>
		<td><input type="text" name="fname" id="fname" onKeyPress="return isCharKey(event)"  placeholder="First Name"class="a" size="30"> <span class="error"> <?php echo $fErr;?></span></td>
		</tr>


	<tr>



	<tr>
	<td><b>Middle Name:</b></td></tr><tr>
	<td>
	<input type="text" name="mname" id="mname" onKeyPress="return isCharKey(event)" Placeholder="Middle Name" size="30"> <span class="error"> <?php echo $mErr;?></span></td>
	</tr>

	<tr>
	<td><b>Last Name:</b></td></tr><tr>
	<td>
	<input type="text" name="lname" id="lname" onKeyPress="return isCharKey(event)" Placeholder="Last Name" size="30"> <span class="error"> <?php echo $lErr;?></span></td>
	</tr>
	<tr>
	<td><b>Sex:</b></td></tr><tr>
	<td>
	<input type="text" onKeyPress="return isCharKey(event)" name="sex" id="sex"  placeholder="Sex male or female"size="30"> <span class="error"> <?php echo $sErr;?></span></td>
	</tr>



	<tr>
	<td><b>Email:</b></td></tr><tr>
	<td>
	<input type="email" name="email" id="email"  placeholder="Email"size="30"> <span class="error"> <?php echo $eErr;?></span></td>
	</tr>

	<tr>
	<td><b>Commulative GPA:</b></td></tr>
	<tr>
	<td>
	<input type="text" name="cgpa" placeholder="Commullative GPA write Like 3.80, 3.50, 4.00 ,4 , 3"   id="cgpa"  size="30"> <span class="error"> <?php echo $cErr;?></span></td>
	</tr>

	<tr>
	<td><b>Upload Your Document and CV Here:</b></td></tr>
	<tr>
	<td>
	<input type="file" name="files[]" multiple id="file"  size="30"> <span class="error"> <?php echo $zErr;?></span></td>
	</tr>

	<tr><td><button type="submit" name="submit" ><i class='fa fa-edit icon'>&nbsp;&nbsp;Apply</i></button></td></tr>

	<tr><td>

	<input type="reset" value="Clear"></td></tr>
	</table>

	</form>



</div>
<div id = "left-side-menu" style="	background-color: rgb(14,29,31);
	margin-top: -355px;
	margin-right: 1190px;
	margin-left: -135px;
	padding: 0px;
	height: 360px;
	float:left;
	border-radius:5px;
	width: 126px;">

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
					 margin-left: -10px;
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

<div id = "footer" style="width: 1265px;
margin-left: -135px; 
margin-top:9px;
">
	&copy;2019 wlduhrms.com. All right reserved.
</div>










</body>
</html>