<?php
$connect = mysqli_connect("localhost", "root", "", "wldu_hrms");
if(isset($_POST["region"], $_POST["city"], $_POST["zone"], $_POST["wereda"], $_POST["kebele"], $_POST["house_no"], $_POST["phone_no"], $_POST["emp_id"]))
{
 $region = mysqli_real_escape_string($connect, $_POST["region"]);
 $city = mysqli_real_escape_string($connect, $_POST["city"]);
 $zone = mysqli_real_escape_string($connect, $_POST["zone"]);
 $wereda = mysqli_real_escape_string($connect, $_POST["wereda"]);
 $kebele = mysqli_real_escape_string($connect, $_POST["kebele"]);
 $house_no = mysqli_real_escape_string($connect, $_POST["house_no"]);
 $phone_no = mysqli_real_escape_string($connect, $_POST["phone_no"]);
 $emp_id = mysqli_real_escape_string($connect, $_POST["emp_id"]);


 $query = "INSERT INTO residential_address(region, city, zone, wereda, kebele, house_no, phone_no, emp_id) VALUES('$region', '$city', '$zone', '$wereda', '$kebele', '$house_no', '$phone_no', '$emp_id')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>