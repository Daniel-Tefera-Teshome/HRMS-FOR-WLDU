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
	include("connection.php");  
?>
 
 
 
 
 <html>
<head>
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<style>
#customers {
    font-family: "Time New Roman";
    border-collapse: collapse;
    width: 1000px;
		margin-left:90px;
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
      disp_setting+="scrollbars=yes,width=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open(disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Six Month </title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:16px;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<title>WLDU HRMS</title>
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
    $s = "select *  from employee_request where status = 'Approved' and datee >= DATE_SUB(NOW(), INTERVAL 1 YEAR)";
	$sql = mysql_query($s);
  
  
   $count=mysql_num_rows($sql);
  if($count==0){
	  echo "<font color=red>There is no available report</font>";
  }
  
  
  
  

Print "<table border id='customers' cellpadding=3 width='100%'>";
print"<tr style='background-color:#ffffff;color: #000000;'>";
print"<th colspan=17> <center>


ክፍት የስራ ቦታው በሰራተኛ እንዲሞላ ጠይቀው ምያቄያቸው የጸደቀላቸው የስራ ክፍሎች ዝርዝር<center></th></tr>";
print"<tr style='background-color:#ffffff;color: #000000;'>";





print"<tr style='background-color:#ffffff;color: #000000;'>";
print"<th width='80px'> Date</th>";
print"<th width='80px'> Department</th>";
print"<th width='80px'> Job Name</th>";
print"<th width='80px'> Level</th>";

print"<th width='80px'> Salary</th>";
print"<th width='80px'> Job_Type </th>";
print"<th width='80px'> Job Position</th>";
print"<th width='80px'> Required Skill</th>";
print"<th width='80px'> Start Date</th>";
print"<th width='80px'> Request By</th>";
print"</tr>";

while($row = mysql_fetch_array($sql))
{
Print "<tr>";
Print "<td>" . $row['datee'] . "</td>";
Print "<td>" . $row['fromm']."</td>";
Print "<td>" . $row['job_name'] . "</td>";
Print "<td>" . $row['level'] . "</td>";


Print "<td>" . $row['salary'] . "</td>";
Print "<td>" . $row['job_type'] . "</td>";
Print "<td>" . $row['job_position'] . "</td>";
Print "<td>" . $row['required_skill'] . "</td>";
Print "<td>" . $row['start_date'] . "</td>";
Print "<td>" . $row['request_by'] . "</td>";
}
Print "</tr>";
Print "<tr>";
print "<td colspan=9>"."<b>Total</b>";
print "<td>"."$count";
print "</tr>";

echo "</table><br><br>";
print "</div>";
	if($count!=0){
	
	echo '<a href="javascript:Clickheretoprint()"><font size=5 color=#000000><i class="fa fa-print">&nbsp;&nbsp;Print</i></font></a><br><br><br>';
}	
?>
	<a href="six.php" target="content">Back</a>	
		

	
		</div>
		</td>
		</tr>
		</table>
       </td>

	</table>
	</div>
</body>
</html>