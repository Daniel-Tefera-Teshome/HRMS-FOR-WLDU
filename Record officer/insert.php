<?php
$connect = mysqli_connect("localhost", "root", "", "wldu_hrms");
if(isset($_POST["emp_id"], $_POST["first_name"], $_POST["middle_name"], $_POST["last_name"], $_POST["birth_place"], $_POST["birth_date"], $_POST["nation"], $_POST["gender"], $_POST["email"], $_POST["salary"], $_POST["level"], $_POST["position"]))
 $d = date('Y-m-d');
{
 $emp_id = mysqli_real_escape_string($connect, $_POST["emp_id"]);
 $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
 $middle_name = mysqli_real_escape_string($connect, $_POST["middle_name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
 $birth_place = mysqli_real_escape_string($connect, $_POST["birth_place"]);
 $birth_date = mysqli_real_escape_string($connect, $_POST["birth_date"]);
 $nation = mysqli_real_escape_string($connect, $_POST["nation"]);
 $gender = mysqli_real_escape_string($connect, $_POST["gender"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $salary = mysqli_real_escape_string($connect, $_POST["salary"]);
 $level = mysqli_real_escape_string($connect, $_POST["level"]);
 $position = mysqli_real_escape_string($connect, $_POST["position"]);


 $query = "INSERT INTO personal_info(emp_id, datee, first_name, middle_name, last_name, birth_place, birth_date, nation, gender, email, salary, level, position) VALUES('$emp_id', '$d', '$first_name', '$middle_name', '$last_name', '$birth_place', '$birth_date', '$nation', '$gender', '$email', '$salary', '$level', '$position')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>