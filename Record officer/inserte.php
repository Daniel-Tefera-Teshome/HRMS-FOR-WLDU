<?php
$connect = mysqli_connect("localhost", "root", "", "wldu_hrms");
if(isset($_POST["elementary"], $_POST["high_school"], $_POST["university"], $_POST["cirteficate"], $_POST["education_type"], $_POST["emp_id"]))
{
 $elementary = mysqli_real_escape_string($connect, $_POST["elementary"]);
 $high_school = mysqli_real_escape_string($connect, $_POST["high_school"]);
 $university = mysqli_real_escape_string($connect, $_POST["university"]);
 $cirteficate = mysqli_real_escape_string($connect, $_POST["cirteficate"]);
 $education_type = mysqli_real_escape_string($connect, $_POST["education_type"]);
 $emp_id = mysqli_real_escape_string($connect, $_POST["emp_id"]);


 $query = "INSERT INTO educational_info(elementary, high_school, university, cirteficate, education_type, emp_id) VALUES('$elementary', '$high_school', '$university', '$cirteficate', '$education_type', '$emp_id')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>