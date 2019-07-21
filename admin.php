<?php
require 'core.php';
require 'connect.php';
if($_SESSION['user_id']==NULL)
{
	header('Location:hosp-index.php');
}
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
<li class="active"><a href="#">Home</a></li>
<li><a href="myprof.php">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-12" id="content">
<ul id="admin_option">
<li><a href="admin-reg.php">ADD USER</a></li>
<li><a href="removeuser.php">REMOVE USER</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-12" id="footer">
Copyright &copy APPLE HOSPITALS
</div>
</div>
</body>
</html>