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
	$qry = "SELECT * FROM users";
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

#left-side-menu ul{
			text-align: left;
			border-radius: 5px;
			padding: 0px;
			list-style-type: none;
			margin-left: 0px;
			margin-right: 0px;
			float: left;
			margin-top: 4px;
			margin-bottom: 4px;
			background-color: rgb(14,29,31);
		}

		#left-side-menu ul li{
			margin-left: -15px;
		}

		#left-side-menu ul li a{
			text-decoration: none;
			font-family: times new romans;
			font-size: 22px;
			color: white;
			padding: .5em 1.3em;
			transition:2s,transform 0.5s 1s;
			cursor: pointer;
			text-align: left;
			
		}

		#left-side-menu ul li a:hover{
			font-family: times new romans;
			font-size: 22px;
			color: black;
			background-color: white;
			border-radius: 10px;
			transform: rotate(360deg);
			margin-left: 0px;
			margin-right: 0px;

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
		<li><a href="create_account.php"> Create account </a> </li>
		<li><a href="activate.php"> Activate </a> </li>	
		<li><a href="activate.php"> Deactivate </a> </li>
		<!-- <li><a href="update_account.php"> Update account </a> </li> -->
		<li><a href="change_password.php"> Change password </a> </li>
		<li><a href="help.php"> Help </a> </li>
		<li><a href="logout.php"> Log out </a> </li>
	</ul>
</div>



<div class = "main" class="scrollable">
		<!--	<h1 style="text-align: center;"> Welcome to change password page</h1>
		<p> here is some notes <br>that you should have to read</p> 	-->

	<table border = "1" style="background-color: white;text-align: center;margin-left: 0px;">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Username</th>
				<th>Role</th>
				<th>Current Status</th>
				<th>Change Status</th>
			</tr>
		</thead>
			<?php while($data = mysqli_fetch_assoc($result)){ ?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['role']; ?></td>
				<td>
					<?php 
						if ($data['status'] == 1) {
							echo "<p id = sts".$data['id']." style = 'color:green'>Active</p>";
						}else{
							echo "<p sts".$data['id']." style = 'color:red'>Inactive</p>";
						}
					?>
				</td>
				<td>
					<select onchange = "activeInactive(this.value,<?php echo $data['id']; ?>)">
						<option value = ""> Select</option>
						<option value="1">Active</option>
						<option value="0">Inactive</option>
					</select>
				</td>
			</tr>
			<?php } ?>
		</table>

</div>
<div id = "left-side-menu" style="height: 360px;margin-top: -360px;">

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
			url:'change.php',
			data:{val:val,user_id:user_id},
			success:function(result){
				//console.log(result);
				if(result ==1){
					$('#sts' +user_id).html('Active').css('color','green'); 
				}
				else{
					$('#sts' +user_id).html('Inactive').css('color','red'); 
				}

			}
		});

	}
</script> 
</html>