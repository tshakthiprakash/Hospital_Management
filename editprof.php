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
 if(!empty($_POST['fname']))
 {
	 $resultfname=$_POST['fname'];
	 $sq="UPDATE `userlogin` SET `fname`='$resultfname' WHERE `id` = '$result'";
	 mysql_query($sq);
 }
if(!empty($_POST['lname']))
 {
	 $resultlname=$_POST['fname'];
	 $sql="UPDATE `userlogin` SET `lname`='$resultlname' WHERE `id` = '$result'";
	 mysql_query($sql);
 }
 if(!empty($_POST['pho']))
 {
	 $resultphone=$_POST['pho'];
	 $sqr="UPDATE `userlogin` SET `phone`='$resultphone' WHERE `id` = '$result'";
	 mysql_query($sqr);
 }
 if(!empty($_POST['email']))
 {
	 $resultemail=$_POST['email'];
	 $sqt="UPDATE `userlogin` SET `email`='$resultemail' WHERE `id` = '$result'";
	 mysql_query($sqt);
 }
 if(!empty($_POST['addr']))
 {
	 $resultadd=$_POST['addr'];
	 $sqe="UPDATE `userlogin` SET `add`='$resultadd' WHERE `id` = '$result'";
	 mysql_query($sqe);
 }
 if(!empty($_POST['dt']))
 {
	 $resultdate=$_POST['dt'];
	 $sqf="UPDATE `userlogin` SET `dob`='$resultdate' WHERE `id` = '$result'";
	 mysql_query($sqf);
 }
 if(isset($_POST['submit']))
 {
	 header('Location:myprof.php');
 }
	 
 
?>

 </script>
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
<li><a href="myprof.php">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-2" id="left_bar">
<ul id="left_list">
<li class="active"><a href="#">Edit Profile</a></li>
<li><a href="changepass.php">Change Password</a></li>
</ul>
</div>
<div class="col-sm-8" id="content">
<form class="form-horizontal" role="form" id="reg-form" method="post" action="">
<div class="form-group">
    <label class="control-label col-sm-2" id="email">Firstname:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="fname" placeholder="<?php echo $row['fname']?>" name="fname"/>
    </div>
	<div class="col-sm-2" class="red" id="fnameError"></div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Lastname:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="lastname" id="lname" placeholder="<?php echo $row['lname']?>"/>
    </div>
	<div class="col-sm-2" class="red" id="lnameError"></div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">D.O.B:</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" name="dt"/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Phone No:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="phoneno" name="pho" placeholder="<?php echo $row['phone']?>"/>
    </div>
	<div class="col-sm-2" class="red" id="phonenoError"></div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Address:</label>
    <div class="col-sm-8">
      <textarea name="addr" id="addr" class="form-control"><?php echo $row['add'];?></textarea>
    </div>
	<div class="col-sm-2" class="red" id="addrError"></div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Email:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="email" name="email" placeholder="<?php echo $row['email']?>"/>
    </div>
	<div class="col-sm-2" class="red" id="emailError"></div>
  </div>
  <div class="form-group">
  <button type="submit" id="sub"  class="btn btn-primary" name="submit">Edit</button><button type="reset" class="btn btn-danger" id="sub">Cancel</button>
</div>
</form>

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