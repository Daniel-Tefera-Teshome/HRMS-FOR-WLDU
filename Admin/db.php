<?php 
	
	$username = 'root'; 
	$hostname = 'localhost';
	$password = '';

	$db = 'wldu_hrms';
	$con = mysqli_connect($hostname,$username,$password,$db);
	if(!$con){
		die(mysqli_error()); 
	}
	//echo "string";
 ?>