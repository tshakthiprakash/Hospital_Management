<?php
require 'core.php';
require 'connect.php';
$result = $_SESSION['user_id'];
$query="SELECT * FROM `userlogin` WHERE `id` = '$result'";
 if($query_run=mysql_query($query))
 {
	 $query_num_rows=mysql_num_rows($query_run);
	 if($query_num_rows==1)
		  {
			$row = mysql_fetch_assoc($query_run);
			
		  }
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>APPLE HOSPITALS</title>
<link rel="stylesheet" href="bootstrap.css"></link>
<link rel="stylesheet" type="text/css" href="hsstyle.css"/>
</head>
<body>
<div class="row">
<div class="col-sm-12" id="header">
<h1>APPLE  HOSPITALS</h1>
</div>
</div>
<div class="row">
<div class="container-fluid" id="nav_bar">
<ul id="menu_list" class="nav navbar-nav">
<li><a href="<?php echo $row['design'].".php"?>">Home</a></li>
<li class="active"><a href="#">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-2" id="left_bar">
<ul id="left_list">
<li><a href="editprof.php">Edit Profile</a></li>
<li><a href="changepass.php">Change Password</a></li>
</ul>
</div>
<div class="col-sm-8" id="content">
<table class="table-hover">
<tr><td><h3> Firstname:</td><td><h3><?php echo $row['fname'];?></td></tr>
<tr><td><h3> Lastname:</td><td><h3><?php echo $row['lname'];?></td></tr>
<tr><td><h3> Gender:</td><td><h3><?php echo $row['gen'];?></td></tr>
<tr><td><h3> D.O.B:</td><td><h3><?php echo $row['dob'];?></td></tr>
<tr><td><h3> Address:</td><td><h3><?php echo $row['add'];?></td></tr>
<tr><td><h3> Contact:</td><td><h3><?php echo $row['phone'];?></td></tr>
<tr><td><h3> Email:</td><td><h3><?php echo $row['email'];?></td></tr>

</table>
</div>
<div class="col-sm-2" id="content"></div>
</div>
<div class="row">
<div class="col-sm-12" id="footer">
Copyright &copy APPLE HOSPITALS
</div>
</div>
</body>
</html>