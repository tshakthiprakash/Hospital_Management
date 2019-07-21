<?php
$status=false;
require 'core.php';
require 'connect.php';
$time=time();
$dat=date("y-m-d",$time);
$query="SELECT * FROM `appointments` WHERE `date` > '$dat' && `status` == NULL";
$query_run=mysql_query($query);
$queryrow=mysql_num_rows($query_run);
if($queryrow>=1)
$status=true;
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
<li><a href="doctor.php">Home</a></li>
<li><a href="myprof.php">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-2" id="left_bard">
<ul id="left_list">
<li><a href="doctor.php">Prescription</a></li>
<li><a href="#">Records</a></li>
<li class="active"><a href="#">Appointments</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="col-sm-10" id="content_main">
<?php
$i=0;
echo '<form method="POST" action=""><table id="appotable" class="table-striped"><tr><td>User Id</td><td>Name </td><td>Date </td><td>Time</td><td></td></tr>';

while($row = mysql_fetch_assoc($query_run))
 {
	 $array[]=$row;
	 $statu="status".$i;
	echo 
	'<tr><td>'.$row["user_id"].'</td><td>'.$row["name"].'</td><td>'.$row["date"].'</td><td>'.$row["time"].'</td><td><input type="radio" name="'.$statu.'" value="Yes"> Yes <input type="radio" value="No" name="'.$statu.'"> No</td></tr>';
	$i++;
	}
	
echo'</table><input type="submit" value="Submit" name="subm" class="btn btn-primary" id="subd" /></form>';
	if(isset($_POST['subm']))
{
	for($j=0;$j<$queryrow;$j++)
	{
	$status='status'.$j;
	$resstat=$_POST[$status];
	$resid=$array[$j]['user_id'];
	$sql= "UPDATE `appointments` SET `status`='$resstat' WHERE `user_id` = '$resid'";
	mysql_query($sql);
	unset($resstat);
	}
}

?>
</div>
<div class="row">
<div class="col-sm-12" id="footer">
Copyright &copy APPLE HOSPITALS
</div>
</div>
</body>
</html>