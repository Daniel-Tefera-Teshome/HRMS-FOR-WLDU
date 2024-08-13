<?php
$connect = mysqli_connect("localhost", "root", "", "wldu_hrms");
if(isset($_POST["id"]))
{
	$id_num = "";
	$datee = "";
	$first_name = "";
	$middle_name = "";
	$last_name = "";
	$birth_place = "";
	$birth_date = "";
	$nation = "";
	$gender = "";
	$email = "";
	$salary = "";
	$level = "";
	$position = "";

	 $queryy = "SELECT * FROM personal_info WHERE id = '".$_POST["id"]."'";
	 $result = mysqli_query($connect, $queryy);
	 while($row = mysqli_fetch_assoc($result)){
	 	$id_num = $row["emp_id"];
	 	$emp_id = $row["emp_id"];
	 	$datee = $row["datee"];
	 	//$datee = $row["datee"];
	 	$first_name = $row["first_name"];
	 	$middle_name = $row["middle_name"];
	 	$last_name = $row["last_name"];
	 	$birth_place = $row["birth_place"];
	 	$birth_date = $row["birth_date"];
	 	$nation = $row["nation"];
	 	$gender = $row["gender"];
	 	$email = $row["email"];
	 	$salary = $row["salary"];
	 	$level = $row["level"];
	 	$position = $row["position"];
	 	$terminated_date = date('Y-m-d');

		echo 'employee with this id number '. $id_num;
	 }

	 $query = "DELETE FROM personal_info WHERE emp_id = '".$id_num."'";
	 $query2 = "DELETE FROM educational_info WHERE emp_id = '".$id_num."'";
	 $query3 = "DELETE FROM emergency_contact WHERE emp_id = '".$id_num."'";
	 $query4 = "DELETE FROM family_situation WHERE emp_id = '".$id_num."'";
	 $query5 = "DELETE FROM guaranter_contact WHERE emp_id = '".$id_num."'";
	 $query6 = "DELETE FROM residential_address WHERE emp_id = '".$id_num."'";

	 if(mysqli_query($connect, $query) && mysqli_query($connect, $query2) && mysqli_query($connect, $query3) && mysqli_query($connect, $query4) && mysqli_query($connect, $query5) && mysqli_query($connect, $query6))
	 {
	  echo ' Deleted Successfully!!';
	 }

	 $query8 = "INSERT INTO terminated_employee(emp_id, datee, first_name, middle_name, last_name, birth_place, birth_date, nation, gender, email, salary, level, position,terminated_date) VALUES('$emp_id', '$datee', '$first_name', '$middle_name', '$last_name', '$birth_place', '$birth_date', '$nation', '$gender', '$email', '$salary', '$level', '$position','$terminated_date')";
	 if (mysqli_query($connect,$query8)) {
	  echo ' and Terminated Successfully!!';
	 }

}
?>
