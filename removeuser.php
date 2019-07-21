<?php
require 'core.php';
require 'connect.php';
$result = $_SESSION['user_id'];
$removeid=$_POST['userid'];
$query="DELETE FROM `hospital`.`userlogin` WHERE `userlogin`.`id` = '$removeid'";

mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>APPLE HOSPITALS-ADMIN</title>
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
<li><a href="admin.php">Home</a></li>
<li><a href="myprof.php">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-12" id="content">
<form class="form-horizontal" role="form" id="changepassform" method="post" action="">
  <div class="form-group">
    <label class="control-label col-sm-2" id="email">User Id:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="userid"/> <input type="submit" value="Remove"/>
    </div>
  </div>
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