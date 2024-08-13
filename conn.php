<?php 
	
	$username = 'root'; 
	$hostname = 'localhost';
	$password = '';

	$db = 'wldu_hrms';

	if(!mysql_connect($hostname,$username,$password)||!mysql_select_db($db)){
		die(mysql_error()); 
	}
	
 ?>