<?php
require 'core.php';
require 'connect.php';
$status=false;
$result = $_SESSION['user_id'];
if(isset($_POST)&&!empty($_POST))
{
	$dat=$_POST['date'];
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
<li class="active"><a href="patient.php">Home</a></li>
<li><a href="myprof.php">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-2" id="left_bard">
<ul id="left_list">
<li class="active"><a href="patient.php">Prescription</a></li>
<li><a href="#">Lab/Scan</a></li>
<li><a href="appointmentpat.php">Appointments</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="col-sm-10" id="content_maind">
<form class="form-horizontal" id="pat_form" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" id="email">Date:</label>
   <div class="col-sm-4">
      <input type="date" class="form-control"value="Date" name="date"/><button id="btn" class="btn btn-primary" type="submit" name="submit">GO</button></form>
	 </div>  
	 <?php
if($status && isset($_POST['submit']))
{
	echo'
<table id="prescription" class="table-bordered" >
<thead>
<th colspan="3" class="col-sm-10"><h2>&nbsp &nbsp APPLE HOSPITALS</h2></th>
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
</div>
<div class="row">
<div class="col-sm-12" id="footer">
Copyright &copy APPLE HOSPITALS
</div>
</div>

</script>
</body>
</html>