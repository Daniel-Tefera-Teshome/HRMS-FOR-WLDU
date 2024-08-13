<?php 
	
	$username = 'root'; 
	$hostname = 'localhost';
	$password = '';

	$db = 'forgot';
	$con = mysqli_connect($hostname,$username,$password,$db);
	if(!$con){
		die(mysqli_error()); 
	}
	echo "string";
 ?>