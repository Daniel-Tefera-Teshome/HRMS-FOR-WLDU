<?php
$connect = mysqli_connect("localhost", "root", "", "wldu_hrms");
if(isset($_POST["full_name"], $_POST["region"], $_POST["zone"], $_POST["wereda"], $_POST["kebele"],$_POST["phone_no"], $_POST["emp_id"]))
{
 $full_name = mysqli_real_escape_string($connect, $_POST["full_name"]);
 $region = mysqli_real_escape_string($connect, $_POST["region"]);
 $zone = mysqli_real_escape_string($connect, $_POST["zone"]);
 $wereda = mysqli_real_escape_string($connect, $_POST["wereda"]);
 $kebele = mysqli_real_escape_string($connect, $_POST["kebele"]);
 $phone_no = mysqli_real_escape_string($connect, $_POST["phone_no"]);
 $emp_id = mysqli_real_escape_string($connect, $_POST["emp_id"]);


 $query = "INSERT INTO emergency_contact(full_name, region, zone, wereda, kebele,phone_no, emp_id) VALUES('$full_name', '$region', '$zone', '$wereda', '$kebele','$phone_no', '$emp_id')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>