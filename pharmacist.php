<?php
require 'core.php';
require 'connect.php';
$status=false;
if(isset($_POST)&&!empty($_POST))
{
	$dat=$_POST['date'];
	$result=$_POST['userid'];
	$query="SELECT * FROM `prescription` WHERE `user_id`='$result'&& `date`='$dat'";
	if($query_run=mysql_query($query))
	{
		$query_num_rows=mysql_num_rows($query_run);
		if($query_num_rows==1)
		  {
			$row = mysql_fetch_assoc($query_run);
			$status=true;
		  }
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
<li class="active"><a href="#">Home</a></li>
<li><a href="myprof.php">MY Profile</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-12" id="content_main" style="height:600px;">
<form  class="form-inline" id="search_form_pharma" style="margin-left:75px;" action="" method="post">
<h4>Enter the Patient ID:&nbsp &nbsp &nbsp &nbsp Date:</h4>
<input class="form-control" type="text" placeholder="Enter patient id" name="userid"></input>&nbsp <input name="date" class="form-control" type="date"/>  <button type="submit" class="btn btn-primary btn-md"value="GO">GO</button>
</form>
 <?php
if($status)
{
	echo'
<table id="prescription" class="table-bordered" >
<thead>
<th colspan="3" class="col-sm-10"><h2>APPLE HOSPITALS</h2></th>
</thead>
<tbody>
<tr><td><h4><b>Contents</td><td><h4><b>Day</td><td><h4><b>Night</td></tr>
<tr><td><textarea class="form-control" rows="12" disabled>'.$row["content"].'</textarea></td><td><textarea class="form-control" rows="12"disabled>'.$row["day"].'</textarea></td><td><textarea class="form-control" rows="12"disabled>'.$row["night"].'</textarea></td></tr>
</tbody>
</table>';
}
?>
</div>
</div>
<div class="row">
<div class="col-sm-12" id="footer">
Copyright &copy APPLE HOSPITALS
</div>
</div>
</body>
</html>