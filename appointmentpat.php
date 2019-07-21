<?php
$status=false;
require 'core.php';
require 'connect.php';
$result=$_SESSION['user_id'];
$quer= "SELECT `fname`,`lname` FROM `userlogin` WHERE `id` = '$result'";
$query_run=mysql_query($quer);
$fname=mysql_result($query_run, 0, 'fname');
$lname=mysql_result($query_run, 0, 'lname');
$name=$fname." ".$lname;
if(isset ($_POST['submit']) && !empty($_POST))
{
$date=$_POST['date'];
$time=$_POST['time'];
$query="INSERT INTO `hospital`.`appointments` (`id`, `user_id`, `date`, `time`, `name`, `status`) VALUES (NULL,'$result', '$date', '$time', '$name', '')";
if(mysql_query($query)) $status=true;
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
<li><a href="patient.php">Home</a></li>
<li><a href="myprof.php">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-2" id="left_bar">
<ul id="left_list">
<li><a href="patient.php">Prescription</a></li>
<li><a href="#">Lab/Scan</a></li>
<li class="active"><a href="#">Appointments</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="col-sm-10" id="content_main">
<form class="form-inline" id="appoint_form" method="POST" action="">
<div class="form-group">
<div class="col-sm-2"><label>Date:</label></div>
<div class="col-sm-2">
<input type="date" class="form-control" name="date"/>
</div>
</div>
<div class="form-group">
    <label class="control-label col-sm-3">Time:</label>
    <div class="col-sm-8">
      <select name="time" class="form-control">
		<option value="9-10AM" >9-10AM</option>
		<option value="10-11AM" >10-11AM</option>
		<option value="11-12AM" >11-12AM</option>
		<option value="2-4PM" >2-4PM</option>
		<option value="2-4PM" >5-6PM</option>
		</select>
   </div>
</div>
<input name="submit" type="submit" class="btn btn-primary" value="submit">&nbsp <input type="reset"  class="btn btn-primary" value="cancel">
</form>
<?php if($status) echo 'succesfull';?>
</div>
<div class="row">
<div class="col-sm-12" id="footer">
Copyright &copy APPLE HOSPITALS
</div>
</div>
</body>
</html>