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

<style>
	input[type=text],textarea,select {
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

	textarea:focus {
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
	    width:1110px;
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
if ((charCode > 64 && charCode < 91 && charCode == 32) || (charCode > 96 && charCode < 123 || charCode == 32) || charCode == 8)
//if (charCode > 64 && (charCode < 91 || charCode > 96))
            return true;
		else
		return false;

         

}
</script>

<?php
// define variables and set to empty values
$eErr=$enErr=$rErr=$ltErr=$elnErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	   if (empty($_POST["emp_id"]))
     {$eErr = "<b><font color='red'>Please Fill This Field</font></b>";}
    if (empty($_POST["emp_name"]))
     {$enErr = "<b><font color='red'>Please Fill This Field</font></b>";}
 	if (empty($_POST["emp_lname"]))
     {$elnErr = "<b><font color='red'>Please Fill This Field</font></b>";}
	   if (empty($_POST["reason"]))
     {$rErr = "<b><font color='red'>Please Fill This Field</font></b>";}
    if (empty($_POST["leave_type"]))
     {$ltErr = "<b><font color='red'>Please Fill This Field</font></b>";}
}
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>

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
	include "connection.php";
if($eErr==TRUE)
echo " error please enter valid data";
elseif($enErr==TRUE)
echo "error please enter valid data ";
elseif($rErr==TRUE)
echo "error please enter valid data ";
elseif($elnErr==TRUE)
echo "error please enter valid data ";
elseif($ltErr==TRUE)
echo "error please enter valid data ";

else {
	if (isset($_POST['submit']))
		{					
			$emp_id=$_POST['emp_id'];
			$emp_name=$_POST['emp_name'];
			$emp_lname=$_POST['emp_lname'];
			$reason=$_POST['reason'];
			$date=$_POST['date'];
			$leave_type= $_POST['leave_type'];

			$sql="INSERT INTO `leave`(emp_id, FName, LName, reason, datee, leave_type)VALUES('$emp_id', '$emp_name', '$emp_lname', '$reason', '$date','$leave_type')";
			$query=mysql_query($sql); 
			if($query>0)
				
				echo '<script type="text/javascript">
				alert(" The Request Sent Successfully!!")</script>';
				
			else
				{
					echo '<Script>alert("Unsucessfull Something went wrong!")</script>';
					echo mysql_error();	
				}

				
		}
}
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
		<li><a href="apply_for_transfer.php"> Apply Transfer </a> </li>
		<li><a href="change_password.php"> Change Password </a> </li>
		<li>
			<?php 
				echo "<a href='view_announcement.php'>Announcement($num)</a>";
			?> 
		</li>
		<!--<li><a href="generate_report.php"> Generate Report </a> </li>-->
		<li><a href="request_leave.php"> Req-Leave </a> </li>
		<li><a href="help.php"> Help </a> </li>
		<li><a href="logout.php"> Log Out </a> </li>
	</ul>
	
</div>



<div class = "main" style=" position: absolute; margin-top: 0px;width: 1110px">


<div id="id01" class="modal">
	 

	  <form method="post" class="modal-content"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<h3>Leave Request Form</h3>
	<table style="background-color:white;" width="97%" height="30px" align="center">


			<tr><td><b>Employee ID:</b></td></tr>
			<tr><td>
				<input type="text" name="emp_id" id="emp_id"  Placeholder="Employee Id" size="30"> <span class="error"> <?php echo $eErr;?></span></td>
			</tr>

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

			<tr><td><b>Employee First Name:</b></td></tr>
			<tr><td>
				<input type="text" onKeyPress="return isCharKey(event)" name="emp_name" id="emp_name"  placeholder="Employee First Name"size="30"> <span class="error"> <?php echo $enErr;?></span></td>
			</tr>

			<tr><td><b>Employee Last Name:</b></td></tr>
			<tr><td>
				<input type="text" onKeyPress="return isCharKey(event)" name="emp_lname" id="emp_lname"  placeholder="Employee Last Name"size="30"> <span class="error"> <?php echo $elnErr;?></span></td>
			</tr>

			<tr><td><b>Reason :</b></td></tr>
			<tr><td>
				<input type="text" name="reason" id="reason"  placeholder="Reason"size="30"> <span class="error"> <?php echo $rErr;?></span></td>
			</tr>

			<tr><td><b>Leave Type :</b></td></tr>
			<tr><td>
				<input type="text" name="leave_type" placeholder="Leave Type" onKeyPress="return isCharKey(event)"  id="leave_type"  size="30"> <span class="error"> <?php echo $ltErr;?></span></td>
			</tr>
	
	<tr><td><button type="submit" name="submit" ><i class='fa fa-edit icon'>&nbsp;&nbsp;Send</i></button></td></tr>

	<tr><td>

	<input type="reset" value="Clear"></td></tr>
	</table>

	</form>


</div>

<div id= "left-side-menu-for-employee"style="	background-color: rgb(14,29,31);
	margin-top: -355px;
	margin-right: 1190px;
	margin-left: -135px;
	padding: 0px;
	height: 360px;
	float:left;
	border-radius:5px;
	width: 126px;">

	<ul>
		<p style="color: white;text-align: center;font-size: 20px">-----------------</p>

		<p style="color: white;text-align: center;font-size: 20px">-----------------</p>
	</ul>
</div>

<div id = "footer" style="width: 1252px;
margin-left: -135px; 
margin-top:9px;
">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>