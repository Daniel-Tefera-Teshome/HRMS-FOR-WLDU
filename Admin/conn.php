<?php 
	
	$username = 'root'; 
	$hostname = 'localhost';
	$password = '';

	$db = 'wldu_hrms';

	if(!mysql_connect($hostname,$username,$password, $db)){
		die(mysql_error()); 
		//echo "error1";
	}
	/*else{
		echo "Fine!";
	}*/
	
 ?>