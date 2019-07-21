<?php
require 'core.php';
require 'connect.php';
$q ="SELECT `id` FROM `userlogin` ORDER BY `id` DESC LIMIT 1";
$ql=mysql_query($q);
$num=mysql_result($ql, 0, 'id');
$num++;
$id=$num;
$resultpass='123';
$resultfname=$_POST['firstname'];
$resultlname=$_POST['lastname'];
$resultgen=$_POST['gend'];
$resultemail=$_POST['email'];
$resultdesi=strtolower($_POST['design']);
$resultphone=$_POST['pho'];
$resultaddr=$_POST['addr'];
$resultdt=$_POST['dt'];
if(isset($id)&&isset($resultpass)&&isset($resultfname)&&isset($resultlname)&&isset($resultgen)&&isset($resultemail)&&isset($resultdesi)&&isset($resultphone)&&isset($resultaddr)&&isset($resultdt))
{
	$sql="INSERT INTO `hospital`.`userlogin` (`id`,`pwd`, `fname`, `lname`, `gen`, `dob`, `add`, `design`, `email`, `phone`,`ques`,`ans`) VALUES (NULL,'$resultpass', '$resultfname', '$resultlname', '$resultgen', '$resultdt', '$resultaddr', '$resultdesi', '$resultemail', '$resultphone','','')";

	mysql_query($sql);
	unset($id);unset($resultpass);unset($resultfname);unset($resultlname);unset($resultgen);unset($resultemail);unset($resultdesi);unset($resultphone);unset($resultaddr);unset($resultdt);
	if(isset($_POST['submit']))
	{
		echo '<script type="text/javascript">
				alert("successfully created!!!");
				</script>';
	header('Location: admin.php');
}}

?>
<!DOCTYPE html>
<html>
<head>
 <script type="text/javascript" src="FormValidation.js" ></script>
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
<div class="col-sm-10" id="content_reg">
<form class="form-horizontal" role="form" id="reg-form" method="post" action="">
<div class="form-group">
    <label class="control-label col-sm-2">User ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  placeholder="<?php echo $id;?>" disabled />
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2" id="email">Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" placeholder="***" name="pass" disabled />
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-2" id="email">Firstname:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="fname" placeholder="Firstname" name="firstname"/>
    </div>
	<div class="col-sm-2" class="red" id="fnameError"></div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Lastname:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="lastname" id="lname" placeholder="lastname"/>
    </div>
	<div class="col-sm-2" class="red" id="lnameError"></div>
  </div>
  <div class="form-group form-inline">
    <label class="control-label col-sm-2">Gender:</label>
    <div class="col-sm-8">
      <input type="radio" class="form-control "  value="male" name="gend"/> Male
	        <input type="radio" class="form-control "  value ="female" name="gend"/> Female
    </div>
	<div class="col-sm-2" class="red" id="genderError"></div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">D.O.B:</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" name="dt" id="dob"/>
    </div>
	<div class="col-sm-2" class="red" id="dobError"></div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Designation:</label>
    <div class="col-sm-8">
      <select name="design" class="form-control">
		<option value="Doctor" name="doctor">Doctor</option>
		<option value="lab" name="lab">Lab/Scan</option>
		<option value="pharmacist" name="pharmacist">Pharamacist</option>
		<option value="receptionist" name="receptionist">Receptionist</option>
		</select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Phone No:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="phoneno" name="pho"/>
    </div>
	<div class="col-sm-2" class="red" id="phonenoError"></div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Address:</label>
    <div class="col-sm-8">
      <textarea name="addr" id="addr" class="form-control"></textarea>
    </div>
	<div class="col-sm-2" class="red" id="addrError"></div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Email:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email"/>
    </div>
	<div class="col-sm-2" class="red" id="emailError"></div>
  </div>
  <div class="form-group">
  <button type="submit" id="sub" name="submit"  class="btn btn-primary">Create</button><button type="reset" class="btn btn-danger" id="sub">Cancel</button>
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