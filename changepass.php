<?php
require 'core.php';
require 'connect.php';
$result = $_SESSION['user_id'];
$query="SELECT `design`,`pwd` FROM `userlogin` WHERE `id` = '$result'";
 if($query_run=mysql_query($query))
 {
	 $query_num_rows=mysql_num_rows($query_run);
	 if($query_num_rows==1)
		  {
			$pass=mysql_result($query_run, 0, 'pwd');
			$desig=mysql_result($query_run, 0, 'design');
			}
			$curpass=$_POST['currentpassword'];
			if($pass==$curpass)
			{
				$newpass=$_POST['newpassword'];
				$quest=$_POST['question'];
				$answ=$_POST['answer'];
				$sql= "UPDATE `userlogin` SET `pwd`='$newpass' WHERE `id` = '$result'";
				$sq= "UPDATE `userlogin` SET `ques`='$quest' WHERE `id` = '$result'";
				$s= "UPDATE `userlogin` SET `ans`='$answ' WHERE `id` = '$result'";
				mysql_query($sql);
				mysql_query($sq);
				mysql_query($s);
				//header('Location: myprof.php');
				echo'<script type="text/javascript">
				alert("Password Successfully Changed");
				</script>';
				
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
<li><a href="<?php echo $desig.'.php'?>">Home</a></li>
<li><a href="myprof.php">MY Profile</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-2" id="left_bar">
<ul id="left_list">
<li><a href="editprof.php">Edit Profile</a></li>
<li class="active"><a href="#">Change Password</a></li>
</ul>
</div>
<div class="col-sm-5" id="content">
<form class="form-horizontal" role="form" id="changepassform" method="post">
<div class="form-group">
    <label class="control-label col-sm-2" id="email">Current Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="username" name="currentpassword"/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" id="email">New Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="newpassword"/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Select your question:</label>
    <div class="col-sm-10">
      <select name="question" class="form-control">
		<option value="sports" name="doctor">What is your favorite game?</option>
		<option value="home" name="lab">Which is your hometown?</option>
		<option value="actor" name="pharmacist">Who is your favorite actor?</option>
		</select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" id="email">Answer:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="username" name="answer"/>
    </div>
  </div>
      <input type="submit" value="Confirm" name="submit" id="csubmit"/>
	
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