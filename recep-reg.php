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
$resultdesi='patient';
$resultphone=$_POST['pho'];
$resultaddr=$_POST['addr'];
$resultdt=$_POST['dt'];
if(isset($id)&&isset($resultpass)&&isset($resultfname)&&isset($resultlname)&&isset($resultgen)&&isset($resultemail)&&isset($resultdesi)&&isset($resultphone)&&isset($resultaddr)&&isset($resultdt))
{
$sql="INSERT INTO `hospital`.`userlogin` (`id`, `pwd`, `fname`, `lname`, `gen`, `dob`, `add`, `design`, `email`, `phone`) VALUES ('$id','$resultpass', '$resultfname', '$resultlname', '$resultgen', '$resultdt', '$resultaddr', '$resultdesi', '$resultemail', '$resultphone')";
mysql_query($sql);
unset($id);unset($resultpass);unset($resultfname);unset($resultlname);unset($resultgen);unset($resultemail);unset($resultdesi);unset($resultphone);unset($resultaddr);unset($resultdt);
header('Location: recep-reg.php');
}
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
<li><a href="receptionist.php">Home</a></li>
<li><a href="myprof.php">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-1"></div>
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
      <input id="fname" type="text" class="form-control" placeholder="Firstname" name="firstname"/>
    </div>
	<div class="col-sm-2" class="red" id="fnameError"></div>
  
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Lastname:</label>
    <div class="col-sm-8">
      <input id="lname" type="text" class="form-control" name="lastname" placeholder="lastname"/>
    </div>
	<div  class="col-sm-2" class="red" id="lnameError"></div>
  
  </div>
  <div class="form-group form-inline">
    <label class="control-label col-sm-2">Gender:</label>
    <div class="col-sm-10">
      <input type="radio" class="form-control "  value="male" name="gend"/> Male
	        <input type="radio" class="form-control " value ="female" name="gend"/> Female
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">D.O.B:</label>
    <div class="col-sm-8">
      <input id="dob" type="date" class="form-control" name="dt"/>
    </div>
	<div class="col-sm-2" class="red" id="dobError"></div>
  
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Designation:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="design" placeholder="patient" disabled />
    </div>
  
  </div>
		
  <div class="form-group">
    <label class="control-label col-sm-2">Phone No:</label>
    <div class="col-sm-8">
      <input id="phoneno" type="text" class="form-control" name="pho"/>
    </div>
	<div class="col-sm-2" class="red" id="phonenoError"></div>
  
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Address:</label>
    <div class="col-sm-8">
      <textarea id="addr" name="addr" class="form-control" ></textarea>
    </div>
	<div class="col-sm-2" class="red" id="addrError"></div>
  
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Email:</label>
    <div class="col-sm-8">
      <input id="email" type="email" class="form-control" name="email"/>
    </div>
	<div class="col-sm-2" class="red" id="emailError"></div>
  
  </div>
  <button type="submit" id="sub"  class="btn btn-primary">Create</button><button type="reset" class="btn btn-danger" id="sub">Cancel</button>
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