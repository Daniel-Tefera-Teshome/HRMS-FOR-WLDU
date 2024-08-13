<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE = edge">
 	<meta name="viewport" content="width = device-width,initial-scale = 1">
 	<!--<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">-->
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
<script type="text/javascript" src=""bootstrap-4.3.1-dist/js/bootstrap.min.js""></script>
<div id = "header">
	<img class = "hrlogo" src="image/HR.png">
	<img class = "wldulogo" src="image/logo.jpg">
	<!--<img style="vertical-align: center;" class = "header-image" src="image/Header_image2.png"> -->
	<h1 id = "h1-heading" style="text-align: center;font-weight: bolder;font-family: Stencil;color: white;padding: 10px;"> Woldia University Human Resource Management System</h1>
</div>


<div id = "navbar">
	<ul>
		<li><a href="index.php"> Home </a> </li>
		<li><a href="about.php"> About Us </a> </li>
		<li><a href="contact.php"> Contact Us </a> </li>
		<li><a href="vacancy.php"> Vacancy </a> </li>
	<!--	<li><a href="comment.php"> Comment </a> </li>
		<li><a href="apply.php"> Apply </a> </li>	-->
		<li><a href="login.php"> Log in </a> </li>
		<li><a href="help.php"> Help </a> </li>
	</ul>
</div>



<div class = "main">
	<!--<h1 style="text-align: center;"> Welcome to log in page</h1>-->

	<form method="POST" style="text-align: center;">
		<!--<fieldset style="margin-left: 350px;width: 100px">
			<legend style="font-family: times new romans;font-size: 20px;font-weight: bolder;"> Login Form</legend> -->
		<div id = "log" style="	border-color: black;
						border-style: solid;
						margin-left: 300px;
						border-radius: 10px;
						width: 50%;"	>
		<table style="margin-left: 0px">
			<tr>
				<!--<td rowspan="2"> <img style="box-shadow: 0px 0px 0px 0px white;"height="100" src="kkk.gif" /> </td> -->
				<td> <strong>Email:</strong> </td>
				<td> <input type="text" name="email" placeholder=" Enter Your e-mail here" autocomplete = "off" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>
			<!--
			<tr>
				<td> <strong>Confirm Password:</strong> </td>
				<td> <input type="Password" name="confirm_password" placeholder="Confirm Password here" style="font-size: 20px;font-family: times new romans;" required> </td>
			</tr>
		-->
			<tr>
				<td></td>
				<!--<td> 
					<form method = "POST">
					 	<a href="requsetReset.php">Forgot Password?</a> 
					</form>
				</td>
				-->
				<td> <input type="submit" name="submit" value="Reset by Email" style="font-size: 20px;font-weight: bolder;font-family: times new romans";></td>
			</tr>
		</table>
		</div>
		<!--
		<img style="box-shadow: 0px 0px 0px 0px white;"height="100" src="kkk.gif" />
		<strong>Username:</strong><input type="text" name="username" placeholder="User name"> <br>
		<strong>Password:</strong><input type="Password" name="password" placeholder="Password"> <br>
		<input type="submit" name="login" value="Login"> -->
	</form> 
	<!--</fieldset> -->


</div>
<div id = "left-side-menu">

</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>
	<?php 
		//Import PHPMailer classes into the global namespaces
		//These must be at the top of your script, not inside a function
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php';
		require 'PHPMailer/src/SMTP.php';
		require 'config.php';

		if (isset($_POST["email"])) {
			
			$emailTo = $_POST["email"];

			$code = uniqueid(true);
			$query = mysqli_query($con, "INSERT INTO resetpassword(code, email) VALUES('$code', '$emailTo')");
			if($query){
				exit("Error");
			}

			$email = new PHPMailer(true);			//Passing 'true' enables exception	
			try{ 
				//Server setting
				$mail->isSMTP();					//set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com'; 		//Specify mail and SMTP Severs
				$mail->SMTPAuth = true;							//enable SMTP server
				$mail->Username = 'danieltefera14@gmail.com';			//SMTP Server
				$mail->Password = 'danio@danio';							//SMTP Password
				$mail->SMTPSecure = 'ssl';								//enables TLS encription, 'ssl' accepted
				$mail->Port = 465;										//TCP port to connect to

				//Reciepients
				$mail->setForm('danieletefera14@gmail.com', 'WLDU HRMS');
				$mail->addAddress($emailTo );			//Add A reciepient	
				$mail->addReplyTo('no-reply@gmail.com', 'No reply');

				//Content
				$url = "http://".$_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code = $code";
				$mail->isHTML(true);									//set the mail format HTML
				$mail->Subject = 'Your Reset Password link is here.';
				$mail->Body = '<h1>  To reset your password  click <a href = $url>this here.</a></h1>';
				$mail->AltBody = 'Here is your requseted passwor reset link from the admin of WLDU HRMS';

				$mail->send();
				echo 'Reset Password has been sent to your email';
			}catch(Exception $e){
				echo 'Message could not be sent. Mailer erroe', $mail->ErrorInfo;
			}
			exit();
		}

	 ?>
</body>
</html>