<?php
$aErr=$bErr=$eErr=$fErr=$sErr ="";
$a=$b=$c=$d=$e="";
?>
<?php
class Comment{
	function Count()
	{
		$con=mysql_connect("localhost","root","");
		mysql_select_db("wldu_hrms",$con);
		$num=0;
		$a=mysql_query("select * from vacancy where Status = 'open'") or die(mysql_error());
		while($rows1=mysql_fetch_array($a))
		{
			$num=mysql_num_rows($a);
			$num=$num++;
		}
		return $num;
	}

	function SendFeedback()
	{

		if (isset($_POST['submit']))
			{      				
				$c=$_POST['email'] ;
				$e=$_POST['subject'];
				$name=$_POST['firstname'];
				if($c!="" && $e!="" && $name!="")
				{
					include("conn.php");								
					$insert=mysql_query("insert into  feedback(name,email,comment) values('$name','$c','$e')"); 
				
					if($insert==true)
					{
						echo '<Script>alert("Your Comment Successfully Sent!")</script>';
					}
					else
					{
						echo '<Script>alert("Unsucessful Something went wrong!")</script>';
	     			}
				}
			
			}
	}
}
$comment = new Comment();
$comment->SendFeedback();
?>


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

<!--- neww-->
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
	color:black;
	font-family:"Time New Roman";
	font-size:16px;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type = reset] {
    background-color: red;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
label{
	font-family:"Time New Roman";
}
input[type=submit]:hover {
    background-color: #45a049;
}
input[type = reset]:hover {
    background-color: url(238,34,45);
}

.main {
    border-radius: 5px;
    //background-color: #f2f2f2;
    padding: 20px;
}
h3
{
	font-family:"Time New Roman";
}
</style>


</head>
<body>

<?php
$aErr=$bErr=$eErr=$fErr=$sErr ="";
					$a=$b=$c=$d=$e="";
					function test_input($data)
					{
					     $data = trim($data);
					     $data = stripslashes($data);
					     $data = htmlspecialchars($data);
					     return $data;
					}
					if ($_SERVER["REQUEST_METHOD"] == "POST")
					{
					   if (empty($_POST["email"]))
					    {
					     	$eErr = "<b><font color='red'>email is required</font></b>";
					    }
					   else
					    {
						    $c = test_input($_POST["email"]);
					     	if (!preg_match("/^[a-zA-Z.@]*$/",$c))
					       	{
					       		$eErr = "<font color='red'>email is not contain other character </font>"; 
					      	}
					     } 
					     if (empty($_POST["firstname"]))
					     {
					     	$fErr = "<b><font color='red'>Please enter you name</font></b>";
					     }
					 	if (empty($_POST["subject"]))
					    {
					    	$sErr = "<b><font color='red'>Type something here</font></b>";
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
		<li><a href="index.php"><font size=4 style="margin-left:-30px"><i class="fa fa-home"></i></font> Home </a> </li>
		<li><a href="about.php"><font size=4 style="margin-left:-30px"><i class="fa fa-list"></i></font> About Us </a> </li>
		<li><a href="contact.php"><font size=4><i class="fa fa-phone"></i></font> Contact Us </a> </li>
		<!--	<li><a href="vacancy.php"><font size=4><i class="fa fa-folder-open"></i></font> Vacancy </a> </li>	-->
		<li>
			<?php 
				$comment = new Comment();
				$c = $comment->Count();
				echo "<a href='vacancy.php'><font color = 'white' size=4><i class='fa fa-folder-open'></i></font> Vacancy($c)</a>";
			?> 
		</li>
		<li><a href="comment.php"><font size=4><i class="fa fa-comment"></font></i> Comment </a> </li>
		<li><a href="apply.php"><font size=4><i class="fa fa-folder-open"></i></font> Apply </a> </li>
		<!--<li><a href="login.php"><font size=4><i class="fa fa-key icon"></font></i>  Log in </a> </li> -->
		<li><a href="help.php"><font size=4><i class="fa fa-question"></font></i> Help </a> </li>
	</ul>
</div>


	<form method="post"  name = "frm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class = "main">
	<!--
	<h1 style="text-align: center;"></h1>
	<p>  <br></p>
-->

<SCRIPT language=Javascript>
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return true;

         return false;
      }
   </SCRIPT>
   <script type="text/javascript">
   		function val(){
   			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   			if (reg.test(frm.email.value)==false) {
   				alert("Invalid Email address!!");
   				//document.getElementById('email').style.bordercolor="red";
   				frm.email.focus();
   				return false;
   			}
   			return true;
   			if (document.getElementById('email').value == "") {
   				alert("Invalid Email address!!");
   				//document.getElementById('email').style.bordercolor="red";
   				frm.email.focus();
   				return false;
   			}
   			//return true;
   		}
   </script>
<div style="margin-left: 100px;border-style: solid;border-radius: 4px;border-width: 4px;width: 700px;">
<table style="margin-left: 0px;">
	<tr>
		<td><label for="fname">First Name</label></td>
    	<td><input type="text" id="firstname" size="50" name="firstname" onkeypress="return isNumberKey(event)" placeholder="Wirte you name" > <span class="error"> <?php echo $fErr;?></span></td>
	</tr>

	<tr>
		 <td><label for="email">Email  </label></td>
    	<td><input type="text" id="email" name="email" placeholder="Your email..."> <span class="error"> <?php echo $eErr;?></span></td>
	</tr>

	<tr>
		<td><label for="subject">Comment</label></td>
    	<td><textarea id="subject" name="subject" placeholder="Write something.." style="height:120px"></textarea><span class="error" ><?php echo $sErr;?> </span></td>
	</tr>
    <tr>
    	<td></td>
    	<td><input type="reset" name="clear" value="Clear">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit"value="Submit" onclick="return val();"></td>
    </tr>
    
 </table>
 </div>
</div>
 </form>
<div id = "left-side-menu" style="height: 390px;margin-top: -390px;">

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