<?php
require 'core.php';
require 'connect.php';
$status = false;
if(isset($_POST) && !empty($_POST))
{
$time=time();
$dat=date("y-m-d",$time);
$resid=$_POST['userid'];
$resmed=$_POST['med'];
$resday=$_POST['day'];
$resnight=$_POST['night'];
$sql="INSERT INTO `prescription` (`user_id`, `date`, `content`, `day`, `night`) VALUES ('$resid', '$dat', '$resmed', '$resday', '$resnight')"; 
$q=mysql_query($sql);
if($q)
{
$status=true;	
}else
{ 
die('error');
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
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-2" id="left_bard">
<ul id="left_list">
<li class="active"><a href="#">Prescription</a></li>
<li><a href="#">Records</a></li>
<li><a href="#">Appointments</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="col-sm-10" id="content_maind">
<?php if($status){echo 'success';} ?>
<form id="search_form" action="" method ="POST">
<h4>Enter the Patient ID:</h4>
<input type="text" placeholder="Enter patient id" name="userid" class="form-control" class="col-sm-5"></input> 
<table id="prescription" class="table-bordered">
<thead>
<th colspan="3" class="col-sm-10"><h2>APPLE HOSPITALS</h2></th>
</thead>
<tbody>
<tr><td><h4><b>Contents</td><td><h4><b>Day</td><td><h4><b>Night</td></tr>
<tr><td><textarea rows="12" name="med" class="form-control"></textarea></td><td><textarea rows="12" name="day" class="form-control"></textarea></td><td><textarea rows="12" name="night" class="form-control"></textarea></td></tr>
</tbody>
</table>
<input type="submit" class="btn btn-primary" name="submit" id="subd" value="save"/><input type="reset" class="btn btn-warning" id="subd" value="cancel">
</form>
</div>
</div>
<div class="row">
<div class="col-sm-12" id="footer">
Copyright &copy APPLE HOSPITALS
</div>
</div>
</body>
</html>