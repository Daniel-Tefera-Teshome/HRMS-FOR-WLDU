<?php
$connect = mysqli_connect("localhost", "root", "", "wldu_hrms");
if(isset($_POST["martial_status"], $_POST["husbund_or_wife_name"], $_POST["emp_id"]))
{
 $martial_status = mysqli_real_escape_string($connect, $_POST["martial_status"]);
 $husbund_or_wife_name = mysqli_real_escape_string($connect, $_POST["husbund_or_wife_name"]);
 $emp_id = mysqli_real_escape_string($connect, $_POST["emp_id"]);


 $query = "INSERT INTO family_situation(martial_status, husbund_or_wife_name,emp_id) VALUES('$martial_status', '$husbund_or_wife_name', '$emp_id')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>