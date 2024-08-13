<?php
$connect = mysqli_connect("localhost", "root", "", "wldu_hrms");
if(isset($_POST["id"]))
{
 	 $id_num = "";
	 $queryy = "SELECT * FROM guaranter_contact WHERE id = '".$_POST["id"]."'";
	 $result = mysqli_query($connect, $queryy);
	 while($row = mysqli_fetch_assoc($result)){
	 	$id_num = $row["emp_id"];
		echo 'employee with this id '. $id_num;
	 }

 	 $query  = "DELETE FROM personal_info WHERE emp_id = '".$id_num."'";
	 $query2 = "DELETE FROM educational_info WHERE emp_id = '".$id_num."'";
	 $query3 = "DELETE FROM emergency_contact WHERE emp_id = '".$id_num."'";
	 $query4 = "DELETE FROM family_situation WHERE emp_id = '".$id_num."'";
	 $query5 = "DELETE FROM guaranter_contact WHERE emp_id = '".$id_num."'";
	 $query6 = "DELETE FROM residential_address WHERE emp_id = '".$id_num."'";

	 if(mysqli_query($connect, $query) && mysqli_query($connect, $query2) && mysqli_query($connect, $query3) && mysqli_query($connect, $query4) && mysqli_query($connect, $query5) && mysqli_query($connect, $query6))
	 {
	  echo ' Deleted Successfully!!';
	 }
}
?>
