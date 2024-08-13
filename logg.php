
	<?php
	class Login{

		function log(){		

			$username = "";
			$password = "";
			$password_hash = "";
			$query = "";
			$query_run = "";
			$query_num_rows = 0;
			$role = "";
			$status = "";
			$name = "";
			$email = "";
			include('conn.php'); 
			

			if (isset($_POST["login"])) {
				
				if(isset($_POST["username"]) && isset($_POST["password"])){
					$username = $_POST['username'];
					$password = $_POST['password'];
					$password_hash = md5($password);

					if(!empty($username) && !empty($password)){
						//echo "string";
						$query = "SELECT `id` ,`status` ,`name` ,`email` , `role` FROM `users` WHERE `username` = '$username' AND `password` = '$password_hash'";


						if($query_run = mysql_query($query)){
							//echo "string";
							$query_num_rows = mysql_num_rows($query_run);
							if($query_num_rows == 0){
								//echo "invalid username and Password combination";
								echo ' <script> alert("Incorrect username and Password!!") </script>';
								header('location:login.php');
							}
							else
							{
								//echo "OK fine! You are logged in now!!";
								$role = mysql_result($query_run, 0, 'role');
								$status = mysql_result($query_run, 0, 'status');
								$name = mysql_result($query_run, 0, 'name');
								$email = mysql_result($query_run, 0, 'email');

								//When the manager is active redirect to the manager page
								if($role == "manager" && $status == "1"){
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:Manager/home.php');
								}

								//Manager is deactivated by the admin
								elseif ($status == "0" && $role == "manager") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}
								//When the admin is active redirect to the admin page
								elseif ($role == "admin" && $status == "1") {
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:admin/home.php');
								}

								//admin is deactivated by the admin itself or by another admin
								elseif ($status == "0" && $role == "admin") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}

								//When the record officer is active redirect to the record officer page
								elseif ($role == "record_officer" && $status == "1") {
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:record officer/home.php');
								}

								//record officer is deactivated by the admin 
								elseif ($status == "0" && $role == "record_officer") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}

								//When the employee is active redirect to the employee page
								elseif ($role == "employee" && $status == "1") {
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:employee/home.php');
								}

								//employee is deactivated by the admin 
								elseif ($status == "0" && $role == "employee") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}

								//When the college dean is active redirect to the college dean page
								elseif ($role == "college_dean" && $status == "1") {
									$_SESSION['user'] = $_POST['username'];
									$_SESSION['name'] = $name;
									$_SESSION['role'] = $role;
									$_SESSION['email'] = $email;
									header('location:college dean/home.php');
								}

								//college dean is deactivated by the admin 
								elseif ($status == "0" && $role == "college_dean") {
									echo ' <script> alert("You are deactivated by the administrator contact the adminstrator!!") </script>';
								}

							}
						} 
					}else{
						echo ' <script> alert("Please fill User Name and Password first to log in!!") </script>';
						//echo "failed";
					}
			/*$q = "SELECT * FROM `users` WHERE `username` = ".$username."' AND `password` = ".$password."";
			$r = mysql_query($q);
			$d = mysql_fetch_array($r,$con);
			$_SESSION['name'] = $d['name'];*/
				}
			}
			error_reporting(0);
		}
	}
	$l = new Login();
	$l->log();
  ?>
