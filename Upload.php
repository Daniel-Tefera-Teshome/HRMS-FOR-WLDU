<?php
		include('connection.php');
		$min_gpa = "";
		$file_name = "";
		$vnum=$_POST['vnum'];
		$data=mysql_query("select * from vacancy where ID = '$vnum'") or die(mysql_error());
		while($info=mysql_fetch_array($data)){
			$min_gpa = $info['Minimum_GPA'];
		}	
		$cgpa= $_POST['cgpa'];
		if ($cgpa >= $min_gpa) {

			if (!empty($_FILES['files']['name'][0])) {
				$files = $_FILES['files'];
				$upload = array();
				$failed = array();

				$allowed = array('txt', 'jpg', 'docx', 'pdf', 'png', 'gif','BMP');

				foreach ($files['name'] as $position => $file_name) {
					$file_tmp = $files['tmp_name'][$position];
					$file_size = $files['size'][$position];
					$file_error = $files['error'][$position];

					$file_ext = explode('.', $file_name);
					$file_ext = strtolower(end($file_ext));

					if (in_array($file_ext, $allowed)) {
						if ($file_error === 0) {
							if ($file_size <= 2097152) {
								$file_name_new = uniqid('', true).'.'.$file_ext;
								//$file_destination = 'uploads/'.$file_name_new;
								$file_destination = 'uploads/'.$file_name;

								if (move_uploaded_file($file_tmp, $file_destination)) {
									//$upload[$position] = $file_destination; 
									echo "<script> alert('File $file_name is Uploaded Successfully!!!')</script>";
								}
								else{
									//$failed[$position] = "[{$file_name}] failed to upload.";
									echo "<script> alert('File Uploading Failed!!!')</script>";

								}
							}
							else{
								//$failed[$position] = "[{file_name}] is too large.";
								echo "<script> alert('File Size is too large!!!')</script>";

							}
						}
						else{
							//$failed[$position] = "[{file_name}] error with code {file_error}. ";
							echo "<script> alert('Something went wrong!!!')</script>";

						}
					}
					else{
						//$failed[$position] = "[{$file_name}] file extension {'$file_ext'} is not allowed.";
						echo "<script> alert('Unsupported File extension!!!')</script>";

					}
				}
			}

		}
		else{
			echo("<script>alert('You Have not Sufficient Commullative GPA fof this vacancy!!')</script>");
		}


?>

<?php
	include('connection.php');
	if (isset($_POST['submit']))
	{
		       								
		$vnum=$_POST['vnum'];
		$date = $_POST['date'];
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'] ;
		$sex=$_POST['sex'];
		$email= $_POST['email'];
		$cgpa= $_POST['cgpa'];
		$query = "";
		//$vnum = $_POST['vnum'];
		//$file name = ??????
		$min_gpa = "";
		$data=mysql_query("select * from vacancy where ID = '$vnum'") or die(mysql_error());
		while($info=mysql_fetch_array($data)){
			$min_gpa = $info['Minimum_GPA'];
			//$id = $info['ID'];
			//echo("<script>alert('$min_gpa')</script>");
		}	


		$sql="INSERT INTO applicant(vacancy_no, Date, FName, MName, LName, sex, email, CGPA, filename)
		                     values('$vnum', '$date', '$fname','$mname','$lname','$sex','$email','$cgpa','$file_name')";
		                     error_reporting(0);
		if ($cgpa >= $min_gpa) {
			$query=mysql_query($sql); 
		}
		else{
			echo("<script>alert('You Have not Sufficient Commullative GPA fof this vacancy!!')</script>");
		}
		if($query>0)
			
			echo '<script type="text/javascript">
			alert(" You are Successfully registered!!")</script>';
			
		else
			{
				echo '<Script>alert("Unsucessfull Registration Something went wrong!!")</script>';
			echo mysql_error();	
			}

		
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
	input[type=text],input[type=file]{
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
$fErr=$mErr=$lErr=$sErr=$eErr=$cErr=$vcErr="";

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
    if (empty($_POST["vnum"]))
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
		<li><a href="index.php"> Home </a> </li>
		<li><a href="about.php"> About Us </a> </li>
		<li><a href="contact.php"> Contact Us </a> </li>
		<li><?php 
				echo "<a href='vacancy.php'>Vacancy($num)</a>";
			?> 
		</li>
		<li><a href="comment.php"> Comment </a> </li>
		<li><a href="apply.php"> Apply </a> </li>
		<li><a href="login.php"> Log in </a> </li>
		<li><a href="help.php"> Help </a> </li>
	</ul>
</div>






<div class = "main" style=" position: absolute; margin-top: 0px;width: 1125px">

	<div id="id01" class="modal">

	  <form method="POST"  action="Upload.php" enctype="multipart/form-data" class="modal-content"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<h3>Applicant Registration Form</h3>
	<table style="background-color:white;" width="97%" height="30px" align="center">
                    <td><?php echo $rows1['id'] ?></td>

	<tr>

	<td><label for="from"><b>Vacancy Number:</b></label></td> </tr>
		<tr>
		<td><input type="text" name="vnum" id="vnum" onKeyPress="return isNumberKey(event)"  placeholder="Write Vacancy Number Here"class="a" size="30"> <span class="error"> <?php echo $vcErr;?></span></td>
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
	<input type="text" name="email" id="email"  placeholder="Email"size="30"> <span class="error"> <?php echo $eErr;?></span></td>
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
	<input type="file" name="files[]" multiple id="file"  size="30"> <span class="error"> </span></td>
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
</div>

<div id = "footer" style="width: 1265px;
margin-left: -135px; 
margin-top:9px;
">
	&copy;2019 wlduhrms.com. All right reserved.
</div>










</body>
</html>