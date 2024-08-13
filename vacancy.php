<!DOCTYPE html>
<html>
<head>
	<title>WLDU HRMS</title>
	<link rel="stylesheet" type="text/css" href="hrmsstyle.css">
	<link rel="icon" type="img/png" href="image/logo.jpg"/>

	<meta charset="utf-8">
	<meta name = "viewport" content="width = device-width,initial-scale = 1">
	<meta http-equiv="X-UA-Compatible" content="IE = edge">

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
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#customers {
    font-family: "Times New Roman";
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color:#ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #576675	;
    color: white;
}
</style>
<style>

* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 41px;
    text-align: center;
	height:29px;
	margin-top:0px;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
 
}

/* Set a style for the submit button */
.btn {
    background-color: dodgerblue;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
<style>
	h5
	{
	background-color: 	#555;
	height:25px;
	color:#ffdfdf;	
	}
	.form-signin {
            max-width: 250px;
            padding: 6px;
            margin: 0 auto;
            color: #002625;
         }
         
	#right button
	{
		background-color: #047b99;
		color: #fffbfb;
		width: 170px;
		height: 40px;
	
	}
	#right select
	{
		width: 170px;
		height: 30px;
	}
	#right input
	{
		  margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
          
		width: 170px;
		height: 30px;
	}
	#right h5{
		width: 170px;
	}
#leftt hr{
		color: white;
	}
	#td{
		
		
		font-family:"Times New Roman";
		font-size:20px;
		color:black;
	}
		.scrollable{
			height: 340px;
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



<div class = "main">
<div class="scrollable">

<table id="customers">

  <tr class="header">
        <th>Vacancy Number</th>
	    <th>Company name</th>
	    <th>Position name</th>
		<th>Level</th>
	    <th>Salary</th>
	    <th>Minimum Required GPA</th>
		<th>Amount</th>
	    <th>Skill</th>
		<th>Evidence</th>
		<th>Position Behavior</th>
		<th>Benefit</th>
		<th>Registration place</th>
		<th>Registration End Date</th>
  </tr>
<?php
include ("connection.php");
//$result = mysql_query("SELECT * FROM vacancy where Status='open' and  Vacancy_position='new assigned'");
$result = mysql_query("SELECT * FROM vacancy where Status='open'");
$num=mysql_num_rows($result);
if($num==0){
	echo "<font color=red size=4>There is no new vacancy</font>";
}
while($row = mysql_fetch_array($result))
  {
	  

$Number = $row['ID'];
$c=$row['Campany_name'];
$Position_name=$row['Position_name'];
$l=$row['Level'];
$Salary=$row['Salary'];
$gpa=$row['Minimum_GPA'];
$Amount=$row['Amount'];
$Skill=$row['Skill'];
$e=$row['Evidence'];
$p=$row['Position_behavior'];
$b=$row['Benefit'];
$Registration_place=$row['Registration_place'];
$Registration_date=$row['Registration_date'];
$date=date_create(date('Y-m-d'));// Today date
$ex=date_create($row['Registration_date']); // Vacancy Expired date

if($date>=$ex){
mysql_query("update vacancy set Status='closed' where ID='$Number'");
 //echo'<meta content="1;vacancy.php" http-equiv="refresh" />';
}
 if($ex>$date){
mysql_query("update vacancy set Status='open' where ID='$Number'");
 //echo'<meta content="1;vacancy.php" http-equiv="refresh" />';
}
?>
<tr>

<td id="td"><?php echo $Number;?></td>
<td id="td"><?php echo $c;?></td>
<td id="td"><?php echo $Position_name;?></td>
<td id="td"><?php echo $l;?></td>
<td id="td"><?php echo $Salary;?></td>
<td id="td"><?php echo $gpa;?></td>
<td id="td"><?php echo $Amount;?></td>
<td id="td"><?php echo $Skill;?></td>	
<td id="td"><?php echo $e;?></td>
<td id="td"><?php echo $p;?></td>
<td id="td"><?php echo $b;?></td>
<td id="td"><?php echo $Registration_place;?></td>	
<td id="td"><?php echo $Registration_date;?></td>	
						
						

		</tr>
<?php
  }
  
//print( "</table>");
mysql_close();
?>
</table>
</div>
</div>

<div id = "left-side-menu" style="	margin-top: -350px;
	height: 350px;">

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

<script type="text/javascript" src="js/jquery.freezeheader.js"></script> 

<script>
	$('table').freezeHeader({
		height:"340px"
	});
</script>

</body>
</html>