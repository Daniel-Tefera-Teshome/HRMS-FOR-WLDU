<!DOCTYPE html>
<html>
<head>
<title>WLDU HRMS  </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	<div id="register">
	<br/>
<div id="section">
<?php
include 'connection.php';

$query1=mysql_query("select * from users ");
$query2=mysql_fetch_array($query1);
$on=$query2['Photo'];
?>
<div id="table" title="table">
<fieldset>
	<h4 align="center" style="color: #42bdb7"><u><b>Change Profile</b></u></h4>
	<table  align="center">
		<tr>
			<td>
				<pre>
					<form action="" method="post" onSubmit="return validate(this);" enctype="multipart/form-data" >
						photo<input  type="file" name="Photo" value="<?php echo $on; ?>" /><br>
						<input type="submit" value="change" name="update" class="btn btn-primary"/>
							
						<?php
							include 'connection.php';
							if(isset($_POST['update'])){
								$on=basename($_FILES['Photo']['name']);
								$ftype=$_FILES['Photo']['type'];
								if(($ftype=="image/jpeg") || ($ftype=="image/jpg") || ($ftype=="image/png") || ($ftype=="image/gif"))
								{
									extract($_POST);
									$target = "Up/";  
									$target1 = $target . basename( $_FILES['Photo']['name']); 
									$file_name1 = $_FILES['Photo']['name'];
									if(move_uploaded_file($_FILES['Photo']['tmp_name'],$target1))
									{
										session_start();
										$user = $_SESSION['user'];
										$sql="update users set Photo='$on' WHERE  id='$user'";
										$query=mysql_query($sql);
										if($query){
											echo '<script type="text/javascript"> alert("successful!")</script>';
								  		}
								  	}
								}	
							else
								echo '<script type="text/javascript">alert("This is not valid image")</script>';
													//	echo $_FILES['photo']['type']." is not valid image";
							}
						?>
					</form>
				</pre>
			</td>
		</tr>
	</table> 									
</fieldset>
</body>
</html>
