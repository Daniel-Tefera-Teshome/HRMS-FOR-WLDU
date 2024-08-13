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

<style>
	input[type=text],input[type=number],input[type=password],textarea,select {
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
	textarea{
		height: 80px;
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

	input[type=password]:focus {
	  border-right: none;
	   border-top: none;
	    border-left: none;
	 
	  background-color: none;
	  border-height:800px;
	  outline: 0;
	    width: 100%;
		height:32px;
		border-bottom-color:#8e44ad;
	  border-bottom-color:h rgba(0,0,0,0.25);
	 
	  transition: 0.5s ease all;
	}
	textarea:focus {
	  border-right: none;
	   border-top: none;
	    border-left: none;
	 
	  background-color: none;
	  border-height:800px;
	  outline: 0;
	    width: 100%;
		height:80px;
		border-bottom-color:#8e44ad;
	  border-bottom-color:h rgba(0,0,0,0.25);
	 
	  transition: 0.5s ease all;
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
if ((charCode > 64 && charCode < 91 && charCode == 32)  || (charCode > 96 && charCode < 123) || charCode == 8 || charCode ==32)
//if (charCode > 64 && (charCode < 91 || charCode > 96))
            return true;
		else
		return false;

         

}
</script>

<body>

<script>
	  jQuery(document).ready(function($) {var dateToday = new Date();
		var dates = $("#dateReg, #dateEnd").datepicker({
	    defaultDate: "+1w",
		dateFormat: 'yy-mm-dd',
	    changeMonth: true,
	    numberOfMonths: 1,
	    maxDate: dateToday,
		  minDate: dateToday,
	    onSelect: function(selectedDate) {
	        	var option = this.id == "dateReg" ? "minDate" : "maxDate",
	            instance = $(this).data("datepicker"),
	            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker.settings.dateFormat, selectedDate, instance.settings);
	        dates.not(this).datepicker("option", option, date);
	   	 }
		});
	});
  </script>
  <script>
	  jQuery(document).ready(function($) {var dateToday = new Date();
		var dates = $("#dateStart, #dateEnd").datepicker({
	    defaultDate: "+1w",
		dateFormat: 'yy-mm-dd',
	    changeMonth: true,
	    numberOfMonths: 1,
	    minDate: dateToday,
		 
	    onSelect: function(selectedDate) {
	        var option = this.id == "dateStart" ? "maxDate" : "minDate",
	            instance = $(this).data("datepicker"),
	            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker.settings.dateFormat, selectedDate, instance.settings);
	        dates.not(this).datepicker("option", option, date);
	   	 }
		});
	});
  </script>

<?php
	// define variables and set to empty values
	$nErr=$cErr=$vErr=$lErr=$sErr=$gErr=$aErr=$skErr =$eviErr=$jobErr=$benefitErr=$regErr=$r1Err="";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		   if (empty($_POST["num"]))
	     {$nErr = "<b><font color='red'>enter number</font></b>";}
	    if (empty($_POST["campany"]))
	     {$cErr = "<b><font color='red'>please enter campnay name</font></b>";}
		   if (empty($_POST["vname"]))
	     {$vErr = "<b><font color='red'>PLease enter  position  name</font></b>";}
	    if (empty($_POST["level"]))
	     {$lErr = "<b><font color='red'>enter job level</font></b>";}
	    if (empty($_POST["salary"]))
	     {$sErr = "<b><font color='red'>please enter salary </font></b>";}
	   if (empty($_POST["amount"]))
	     {$aErr = "<b><font color='red'>amount is required </font></b>";}
	 if (empty($_POST["gpa"]))
	     {$gErr = "<b><font color='red'>GPA is required </font></b>";}
	   if (empty($_POST["radio1"]))
	     {$r1Err = "<b><font color='red'>Select one of them</font></b>";}
	   /*else
	   /*else
	     {
	     $c = test_input($_POST["email"]);
	     // check if e-mail address syntax is valid
	     if (!preg_match("/^[a-zA-Z.@]*$/",$c))
	       {
	       $cErr = "<font color='red'>email is not contain other character </font>"; 
	       }
	     } 
	     //*/

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
	if (isset($_POST['submit']))
	{									
		$date=$_POST['date'];
		$content=$_POST['content'] ;
		
		$sql="INSERT INTO announcement(date,content)
		 values('$date','$content')";
		 if($date = "" && $content = ""){
			$query=mysql_query($sql); 
			if($query>0)
				
				echo '<script type="text/javascript">
				alert(" The Announcement is Successfully Posted!!")</script>';
				
			else
				{
					echo '<Script>alert("Unsucessfull Something went wrong!")</script>';
				echo mysql_error();	
				}
		}else{
			echo '<Script>alert("All fields required!")</script>';
		}
		
	}
?>


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


<div class = "main" style=" position: absolute; margin-top: 0px;margin-right: 10px; width: 1125px;">

	<div id="id01" class="modal">

	  <form method="post" class="modal-content"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<h3> Posting Announcement</h3>
	<table style="background-color:white;" width="97%" height="20px" align="center">
		<tr>
			<td>
				<label for="date"><b>Date</b></label>
			</td>
		</tr>
		
			
		<tr>
			<td >
				<input type="text" name="date" size="30"  readonly value="<?php echo date('Y-m-d')?>"><span class="error"></span>
			</td>
		</tr>

	
	<tr>
		<td>
			<b>Announcement Content:</b>
		</td>
	</tr>
<br>
	<tr>
		<td>
			<textarea name="content" id="announcement"  placeholder="Write the announcement content here"size="30"> </textarea>
		</td>
	</tr>
	
	<tr><td><button type="submit" name="submit" ><i class='fa fa-edit icon'>&nbsp;&nbsp;Save</i></button></td></tr>

	<tr><td>

	<input type="reset" value="Clear"></td></tr>
	</table>

	</form>

	</div>

<div id = "left-side-menu" style="
	margin-top:-355px;
	margin-left: -135px;
	height: 360px;">

	<ul>
		<h2 style="color: white;text-align: center;"> Post options:</h2>
		<p style="color: white;text-align: center;font-size: 20px;">------------------</p>
		<p style="color: white;text-align: center;font-size: 20px;">------------------</p>
		<li><a href="post_vacancy.php"> Vacancy </a> </li>	<br>
		<li><a href="post_announcement.php"> Announce </a> </li>

	</ul>

</div>

<div id = "footer"style="
	margin-top: 8px;
	margin-left: -135px;
	width: 1267px;
	">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>