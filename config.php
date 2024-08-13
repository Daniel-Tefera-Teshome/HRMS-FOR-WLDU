<?php 
	
	$username = 'root'; 
	$hostname = 'localhost';
	$password = '';

	$db = 'wldu_hrms';
	$con = mysqli_connect($hostname,$username,$password,$db);
	if(!$con){
		die(mysql_error()); 
	}
	echo "string";
 ?>