<?php
require 'core.php';
require 'connect.php';
$result=$_SESSION['user_id'];
$resultdate=$_POST['dt'];
$resulttime=$_POST['tme'];
$query="INSERT INTO `hospital`.`appointments` ('id','date','time','name','status') VALUES ('$result','$resultdate','$resulttime','')";
mysql_query($query);

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
<li class="active"><a href="#">Home</a></li>
<li><a href="myprof.php">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-2" id="left_bar">
<ul id="left_list">
<li><a href="#">Prescription</a></li>
<li><a href="#">Lab/Scan</a></li>
<li class="active"><a href="#">Appointments</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="col-sm-10" id="content_main">
<form class="form-inline" role="form" id="appo_form" method="POST" action="">
  <div class="form-group">
    <label>Date:</label>
    <input type="date" class="form-control" name="dt">
  </div>
  <div class="form-group">
    <label>Time:</label>
    <input type="time" class="form-control" name="tme">
  </div>
  <div class="form-group">
    <label>Status:</label>
    <input type="text" class="form-control" name="">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
<div class="row">
<div class="col-sm-12" id="footer">
Copyright &copy APPLE HOSPITALS
</div>
</div>
</body>
</html>