	<?php
		session_start();
		if(!isset($_SESSION['user'])){
		?>
			<script> alert("You are are not logged in please login first!!") </script>
		<?
			header("location:../login.php");
			}
		?>



<!DOCTYPE html>
<html>
<head>
	<title>WLDU HRMS</title>
	<link rel="stylesheet" type="text/css" href="hrmsstyle.css">
	<link rel="icon" type="img/png" href="image/logo.jpg"/>

  <script src="jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css" />
  <script src="DataTables-master/media/js/jquery.dataTables.min.js"></script>
  <script src="DataTables-master/media/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap-datepicker-master/dist/css/bootstrap-datepicker.css" />
  <script src="bootstrap-datepicker-master/dist/js/bootstrap-datepicker.js"></script>

 <!-- <script type="text/javascript" src="jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.freezeheader.js"></script> -->

  <style>
	  body
	  {
	   margin:0;
	   padding:0;
	   background-color:#f1f1f1;
	  }
	  .box
	  {
	   width:1270px;
	   padding:20px;
	   background-color:#fff;
	   border:1px solid #ccc;
	   border-radius:5px;
	   margin-top:25px;
	   box-sizing:border-box;
	  }
  </style>

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
			height: 300px;
			overflow: auto;
			//width: 300px;
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
		<li><a href="home.php">Home</a> </li>
		<li><a href="personal_info.php">Register</a> </li>
		<li><a href="personal_info.php">Update</a> </li>
		<li><a href="change_password.php">Change Password</a> </li>
		<!--<li><a href="generate_report.php">Generate Report</a> </li>-->
		<li><a href="help.php">Help</a> </li>
		<li><a href="logout.php">Log Out</a> </li>
	</ul>
	
</div>



<div class = "main">
	<!--<h1 style="text-align: center;"> Welcome to Record Officer's Register Employee page</h1>
	<p> here is some notes <br>that you have to read</p> -->


	<!-- <div class="container box"> -->
	   <!--<h1 align="center">Live Add Edit Delete Datatables Records using PHP Ajax</h1>
	   <br /> -->
	   <div class="table-responsive" style="background-color: white;">
		   
		    <div align="right">
		     	<button type="button" name="add" id="add" class="btn btn-info">Add</button>
		    </div>
		    <div id="alert_message"></div>
		<!--    
		    <div>
		    	<table>
		    		<thead>
		    			<tr>
		    				<th> First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		    				<th> Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		    				<th> Email</th>
		    			</tr>
		    		</thead>
		    	</table>
		    </div>
		-->
		    <div class="scrollable">
			    <table id="user_data" class="table table-bordered table-striped">
				     <thead>
					      <tr>
						       <th>Full_Name</th>
						       <th>Region</th>
						       <th>Zone</th>
						       <th>Wereda</th>
						       <th>Kebele</th>
						       <th>Phone_No</th>
						       <th>Emp_ID</th>

						       <th>Terminate</th>
					      </tr>
				     </thead>
			    </table>
			</div>
	   </div>
  <!-- </div> -->

</div>

<div id= "left-side-menu-for-employee" style="height: 350px;margin-top: -350px;">

	<ul>

		<li><a href="personal_info.php">Personal</a> </li> <br>
		<li><a href="residential_address.php">Residential</a> </li> <br>
		<li><a href="family_situation.php">Family</a> </li> <br>
		<li><a href="emergency_contact.php">Emergency</a> </li> <br>
		<li><a href="educational_info.php">Educational</a> </li> <br>
		<li><a href="guaranter_contact.php">Guaranter</a> </li>

	</ul>

</div>

<div id = "footer" style="height: 100px;">
	&copy;2019 wlduhrms.com. All right reserved.
</div>

</body>
</html>


<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetchg.php",
     type:"POST"
    }
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"updateg.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>';
   html += '<td contenteditable id="data4"></td>';
   html += '<td contenteditable id="data5"></td>';
   html += '<td contenteditable id="data6"></td>';
   html += '<td contenteditable id="data7"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var full_name = $('#data1').text();
   var region = $('#data2').text();
   var zone = $('#data3').text();
   var wereda = $('#data4').text();
   var kebele = $('#data5').text();
   var phone_no = $('#data6').text();
   var emp_id = $('#data7').text();
 

   if(
	   	full_name != '' &&
	   	region != '' && 
	   	zone != '' &&
	   	wereda != '' &&
	   	kebele != '' &&
	   	phone_no != '' &&
	   	emp_id != ''
   	)
   {
    $.ajax({
     url:"insertg.php",
     method:"POST",
     data:{full_name:full_name, region:region, zone:zone, wereda:wereda, kebele:kebele,phone_no:phone_no, emp_id:emp_id},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("All Fields are required");
   }
  });
  
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"deleteg.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });
</script>
<!--
<script>
	$('table').freezeHeader({
		height:"250px"
	});
</script>
-->