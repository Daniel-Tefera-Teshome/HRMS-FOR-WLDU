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
	<meta charset="utf-8"/>
	<title>WLDU HRMS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

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



<div class = "main scrollable">

<div class="container">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: black;color: white;">
                    <th>Applicant ID</th>
                    <th>Vacancy Number</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Sex</th>
                    <th style="text-align: center;">Email</th>
                    <th>CGPA</th>
					<th>Registerd date</th>
                    <th>File</th>
                    <th>Get Document</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $stmt = $db->prepare("select * from applicant");
                $stmt->execute();
                while($row = $stmt->fetch()){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['vacancy_no'] ?></td>
                    <td><?php echo $row['FName'] ?></td>
                    <td><?php echo $row['MName'] ?></td>
                    <td><?php echo $row['LName'] ?></td>
                    <td><?php echo $row['sex'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['CGPA'] ?></td>
					<td><?php echo $row['Date'] ?></td>
                    <td><?php echo $row['filename'] ?></td>
                    <td class="text-center"><a href="download.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Download</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</div>

<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("wldu_hrms",$con);
	mysql_query("UPDATE applicant SET status = 'seen' WHERE status = 'unseen'");
?>

<?php
	$con=mysql_connect("localhost","root","");
mysql_select_db("wldu_hrms",$con);
$num=0;
$a=mysql_query("select * from feedback where status = '0'") or die(mysql_error());
while($rows1=mysql_fetch_array($a))
{
$num=mysql_num_rows($a);
$num=$num++;

}

	//echo "<b ><a href='View_feedback.php' style='color: red'>view( $num )new feedbacks.</a></b>";
?>

<?php
	$con=mysql_connect("localhost","root","");
mysql_select_db("wldu_hrms",$con);
$numm=0;
$a=mysql_query("select * from applicant where status = 'unseen'") or die(mysql_error());
while($rows1=mysql_fetch_array($a))
{
$numm=mysql_num_rows($a);
$numm=$numm++;

}

	//echo "<b ><a href='View_feedback.php' style='color: red'>view( $num )new feedbacks.</a></b>";
?>

<div id = "left-side-menu" style="
	margin-top: -350px;
	height: 350px;">

	<ul></br>
		<h5 style="color: white;text-align: center;font-weight: bolder;"> View options:</h5>
		<p style="color: white;text-align: center;font-size: 20px;">------------------</p>
		<p style="color: white;text-align: center;font-size: 20px;">------------------</p>
		<li><a href="view_report.php"> Report </a> </li>	<br>
		
		<li>
			<?php 
				echo "<a href='View_feedback.php'>Feedback($num)</a>";
			?>
		</li> </br>

		<li>
			<?php 
				echo "<a href='View_applicant.php'>Aplicant($numm)</a>";
			?>
		</li>

	</ul>

</div>

<div id = "footer" style="height: 90px;">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>