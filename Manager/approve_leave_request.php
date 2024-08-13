  <?php
    session_start();
    if(!isset($_SESSION['user'])){
    ?>
      <script> alert("You are are not logged in please login first!!") </script>
    <?php
      header("location:../login.php");
      }
    ?>

<?php 
	require ('db.php');
	$qry = "SELECT * FROM  `leave`";
	$result = mysqli_query($con, $qry);
 ?>
<!DOCTYPE html>
<html>
<head>
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
		.scrollable{
			height: 100px;
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



<div class = "main" class="scrollable">
	<!--	<h1 style="text-align: center;"> Welcome to change password page</h1>
	<p> here is some notes <br>that you should have to read</p> 	-->

<table border = "1" style="background-color: white;text-align: center;margin-left: 0px;margin-left: 60px;">
	<thead>
		<tr>
			<th>Employee ID</th>
			<th>Date</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Reason</th>
			<th>Leave Type</th>
			<th>Current Status</th>
			<th>Change Status</th>

		</tr>
	</thead>
		<?php while($data = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $data['emp_id']; ?></td>
			<td><?php echo $data['datee']; ?></td>
			<td><?php echo $data['FName']; ?></td>
			<td><?php echo $data['LName']; ?></td>
			<td><?php echo $data['reason']; ?></td>
			<td><?php echo $data['leave_type']; ?></td>
			<td>
				<?php 
					if ($data['status'] == "Approved") {
						echo "<p id = sts".$data['id']." style = 'color:green'>Approved</p>";
					}
					elseif($data['status'] == "Not Seen"){
						echo "<p id = sts".$data['id']." style = 'color:pink'>Not Seen</p>";
					}
						else{
						echo "<p sts".$data['id']." style = 'color:red'>Rejected</p>";
					}
				?>
			</td>
			<td>
				<select onchange = "activeInactive(this.value,<?php echo $data['id']; ?>)">
					<option value = ""> Select</option>
					<option value="Approved">Approved</option>
					<option value="Rejected">Rejected</option>
					<option value="Not Seen">Not Seen</option>
				</select>
			</td>
		</tr>
		<?php } ?>
	</table>

</div>

<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("wldu_hrms",$con);
	$num=0;
	$a=mysql_query("select * from employee_request where status = 'Not Seen'") or die(mysql_error());
	while($rows1=mysql_fetch_array($a))
	{
		$num=mysql_num_rows($a);
		$num=$num++;

	}

?>

<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("wldu_hrms",$con);
	$numa=0;
	$a=mysql_query("select * from `leave`  where status = 'Not Seen'") or die(mysql_error());
	while($rows1=mysql_fetch_array($a))
	{
		$numa=mysql_num_rows($a);
		$numa=$numa++;

	}

?>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("wldu_hrms",$con);
	$numaa=0;
	$a=mysql_query("select * from `transfer`  where status = 'Not Seen'") or die(mysql_error());
	while($rows1=mysql_fetch_array($a))
	{
		$numaa=mysql_num_rows($a);
		$numaa=$numaa++;

	}

?>
<div id = "left-side-menu" style="
	margin-top: -360px;
	height: 360px;">

	<ul>
		<h2 style="color: white;text-align: center;"> Requests needs to approve:</h2>
		<p style="color: white;text-align: center;font-size: 20px;">------------------</p>
		<p style="color: white;text-align: center;font-size: 20px;">------------------</p>
		
		<li><?php 
				echo "<a href='approve_leave_request.php'>Leave($numa)</a>";
			?> 
		</li>		
		<li><?php 
				echo "<a href='approve_employee_request.php'>Employee($num)</a>";
			?> 
		</li>
			<li><?php 
				echo "<a href='approve_transfer_request.php'>Transfer($numaa)</a>";
			?> 
		</li>

	</ul>

</div>

<div id = "footer">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>

<script type="text/javascript" src="jquery.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<script type="text/javascript" src="js/jquery.freezeheader.js"></script> 

<script>
	$('table').freezeHeader({
		height:"355px"
	});
</script>

<script>

	function activeInactive(val,user_id){
		//alert(user_id);
		$.ajax({
			type:'post',
			url:'change1.php',
			data:{val:val,user_id:user_id},
			success:function(result){
				//console.log(result);
				if(result == "Approved"){
					$('#sts' +user_id).html('Approved').css('color','green'); 
				}
				else if(result == "Rejected"){
					$('#sts' +user_id).html('Rejected').css('color','red'); 
				}
				else if(result == "Not Seen"){
					$('#sts' +user_id).html('Not Seen').css('color','pink'); 
				}

			}
		});

	}
</script> 

</html>