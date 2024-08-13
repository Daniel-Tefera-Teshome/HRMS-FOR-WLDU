<html>
<head>
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<style>
#customers {
    font-family: "Time New Roman";
    border-collapse: collapse;
    width: 600px;
	
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

    color: black;
}
.icon {
    padding: 6px;
    background: dodgerblue;
    color: white;
    min-width: 21px;
    text-align: center;
	height:16px;
	margin-top:0px;
}
.reject {
    padding: 6px;
    background: #DC143C;
    color: white;
    min-width: 21px;
    text-align: center;
	height:16px;
	margin-top:0px;
}
#google_translate_element{width:300px;float:right;text-align:right;display:block}
#goog-gt-tt {dispaly:none;visibility: hidden;}








#google_translate_element{width:300px;float:right;text-align:right;display:block}
.goog-te-banner-frame.skiptranslate { display: none !important;} 
body { top: 0px !important; }
#goog-gt-tt{display: none !important; top: 0px !important; } 
.goog-tooltip skiptranslate{display: none !important; top: 0px !important; } 
.activity-root { display: hide !important;} 
.status-message { display: hide !important;}
.started-activity-container { display: hide !important;}
	
body {
    top: 0px !important; 
    }
</style>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open(disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Yearly Report</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:16px;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
  
}
</script>
<title>Human Resource Management</title>
<script language="javascript">

  </script>

<script language="javascript" src="datetimepicker.js"></script>


</head>
<body onLoad="timeimgs('1');">
<div class="content">
		<table  class="maintable"  border="0">

		<tr>

		<td>
		<table border="0" class="inertable">

		<tr>
		<td>
			 <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'am,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div id="print_content">
		<?php
		$query1=mysql_query("select * from user where userid='$user_id'");
$query2=mysql_fetch_array($query1);
$query11=mysql_query("select * from department where userid='$user_id'");
$query21=mysql_fetch_array($query11);
$department=$query21['Dept_name'];


		/*$sql = mysql_query("select personalinfo.EmployeeID,personalinfo.FirstName,  personalinfo.MiddleName, personalinfo.LastName,
	

   educationalinfo.Dept_name,educationalinfo.Position,educationalinfo.Salary from educationalinfo     
  INNER JOIN personalinfo ON educationalinfo.EmployeeID=personalinfo.EmployeeID where educationalinfo.Dept_name='$department' ");*/

  $sql = mysql_query("select *  from
 personalinfo

INNER JOIN educationalinfo ON educationalinfo.EmployeeID=personalinfo.EmployeeID

INNER JOIN residentialaddress ON residentialaddress.EmployeeID=personalinfo.EmployeeID
INNER JOIN workexprience ON workexprience.EmployeeID=personalinfo.EmployeeID

where  personalinfo.RegistrationDate> DATE_SUB(NOW(), INTERVAL 1 YEAR);");
  
  
   $count=mysql_num_rows($sql);
  if($count==0){
	  echo "<font color=red>There is no available report</font>";
  }
  
  
  
  

Print "<table border id='customers' cellpadding=3 width='100%'>";
print"<tr style='background-color:#ffffff;color: #000000;'>";
print"<th colspan=17> <center>


በዚህ አመት የተመዘገቡ ሰራተኞች ስም ዝርዝር<center></th></tr>";
print"<tr style='background-color:#ffffff;color: #000000;'>";

print"<th colspan=7> <center>Personal Information</center> </th><th colspan=4> <center>Educational Information </center></th><th colspan=5> <center>Residential Address<center> </th></tr>";



print"<tr style='background-color:#ffffff;color: #000000;'>";
print"<th> Employee ID</th>";
print"<th> Full Name</th>";
print"<th> Gender</th>";
print"<th> Registered Date</th>";
print"<th> Email </th>";
print"<th> Birth Place </th>";
print"<th> Birth Date </th>";





print"<th> Department</th>";
print"<th> Position name</th>";
print"<th> Certificate</th>";
print"<th> Salary</th>";

print"<th> Region</th>";
print"<th> Sub City</th>";
print"<th> Zone </th>";
print"<th> Woreda</th>";
print"<th> Phone N<u>o</u></th>";
print"</tr>";

while($row = mysql_fetch_array($sql))
{
	Print "<tr>";
	Print "<td>" . $row['EmployeeID'] . "</td>";
Print "<td>" . $row['FirstName'] ." ". $row['MiddleName']." ".$row['LastName']."</td>";
Print "<td>" . $row['BirthDate'] . "</td>";
Print "<td>" . $row['RegistrationDate'] . "</td>";
Print "<td>" . $row['Email'] . "</td>";
Print "<td>" . $row['BirthPlace'] . "</td>";
Print "<td>" . $row['BirthDate'] . "</td>";


Print "<td>" . $row['Dept_name'] . "</td>";
Print "<td>" . $row['Position'] . "</td>";
Print "<td>" . $row['Certeficate'] . "</td>";
Print "<td>" . $row['Salary'] . "</td>";


Print "<td>" . $row['Region'] . "</td>";
Print "<td>" . $row['SubCity'] . "</td>";
Print "<td>" . $row['Zone'] . "</td>";
Print "<td>" . $row['Woreda'] . "</td>";
Print "<td>" . $row['PhoneNo'] . "</td>";
}
Print "</tr>";
Print "<tr>";
print "<td colspan=15>"."<b>Total</b>";
print "<td>"."$count";
print "</tr>";

echo "</table><br><br>";
print "</div>";
	if($count!=0){
	
	echo '<a href="javascript:Clickheretoprint()"><font size=5 color=#000000><i class="fa fa-print">&nbsp;&nbsp;Print</i></font></a><br><br><br>';
}	
?>
	<a href="manager.php">Back</a>	
		
		

	
		</div>
		</td>
		</tr>
		</table>
       </td>

	</table>
	</div>
</body>
</html>