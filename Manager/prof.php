<link rel="stylesheet" href="css/morris.css">
<link href="css/icons.css" rel="stylesheet" type="text/css" />




<html>
<link rel="icon" type="image/png" href="images/logo.jpg"/>
<body>
<style>
.modal-content {
    background-color: #fefefe;
   margin: 3% 4% 4% 3%; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 720px; /* Could be more or less, depending on screen size */
    height: 200px;
}
.modal {
    width:100%;
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 8;
    top: 2;
	height:auto;
    background-color: #474e5d;
}
.green {
	color: black;
	font-weight:italic;
    min-width: 41px;
    text-align: center;
	height:29px;
	margin-top:0px;
	 padding: 5px;
}
.icon {
    padding: 2px;
    color: black;
    min-width: 41px;
    text-align: center;
	height:29px;
	margin-top:0px;
}
.icon:hover {
    padding: 3px;
    background-color: black; 
    color: white;
    min-width: 41px;
    text-align: center;
	height:29px;
	margin-top:0px;
}
</style>
<div class="modal">
	<form method="post" class="modal-content"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		<?php
			session_start();
			include('connection.php');
			$user = $_SESSION['user'];

			$sql = "select * from users WHERE id='$user'";
			$query = mysql_query($sql);
		while($row = mysql_fetch_array($query))
		{
			echo "<table width=98% height=90px align=center cellspacing=2> ";
				echo "<tr>";
					echo "<th>";
						echo "<img src='Up/".$row['Photo']."' width='150'height='150'/>" ; 
					echo "</th>";	
				echo "</tr>";
				echo "<tr>";
					echo "<th>";	
						echo '<i class="fa fa-user "></i>&nbsp;&nbsp;&nbsp;Name' ; 
					echo "</th>";
					echo "<td>";	
						echo   $row['name'] ; 
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<th>";	
						echo '<i class="fa fa-envelope "></i>&nbsp;&nbsp;&nbsp;Email'; 
					echo "</th>";
					echo "<td>";	
						echo   $row['email']; 
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<th>";	
					echo "</th>";
					echo "<td>";	
						echo '<a  href="update.manager.profile.php" target="content"><font  size="4"><i class="fa fa-edit icon">&nbsp; Update Profile</i></font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					echo "</td>";
				echo "</tr>";
			
			echo "</table";
		}
		?>
	</form>

</div>
</body>
</html>