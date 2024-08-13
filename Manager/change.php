<?php 
require ('db.php');
$_POST['val'];
$_POST['user_id'];
$qry = mysqli_query($con, "UPDATE `employee_request`  set `status` = '".$_POST['val']."' WHERE `id` =  '".$_POST['user_id']."' ");
if ($qry) {
	$q = mysqli_query($con, "SELECT * FROM  `employee_request` where `id` = '".$_POST['user_id']."'");
	$data = mysqli_fetch_assoc($q);
	echo $data['status'];
}
?> 