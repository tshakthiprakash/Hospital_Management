<?php
require 'core.php';
require 'connect.php';
if(isset($_POST['question'])&& isset($_POST['answer'])&&isset($_POST['phone'])&&isset($_POST['newpass']))
{
	 $quest= $_POST['question'];
	 $answ= $_POST['answer'];
	 $pho=$_POST['phone'];
	 $nwpass=$_POST['newpass'];
	$query= "SELECT `id` FROM `userlogin` WHERE `ques` = '$quest' AND `ans` = '$answ' AND `phone` = '$pho'";
	 if($query_run=mysql_query($query))
	  {
		  $query_num_rows=mysql_num_rows($query_run);
		  if($query_num_rows==0)
		  {
			  echo'<script type="text/javascript">
				alert("Invalid Details");
				</script>';
		  }
		  else if($query_num_rows==1)
		  {
			  $user_id=mysql_result($query_run, 0, 'id');
			  $qu= "UPDATE `userlogin` SET `pwd`='$nwpass' WHERE `id` = '$user_id'";
			  mysql_query($qu);
			  echo'<script type="text/javascript">
				alert("Password changed succesfully ");
				</script>';
			  header('Location: hosp-index.php');
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
<li><a href="hosp-index.php">Home</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="about_us.php">About Us</a></li>
</ul>
</div>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-5" id="content">
<form class="form-horizontal" role="form" id="changepassform" method="post">
<div class="form-group">
    <label class="control-label col-sm-4">Please Enter your Mobile:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="phone"/>
    </div>
  </div>
<div class="form-group">
    <label class="control-label col-sm-4">Select your question:</label>
    <div class="col-sm-8">
      <select name="question" class="form-control">
		<option value="sports" name="doctor">What is your favorite game?</option>
		<option value="home" name="lab">Which is your hometown?</option>
		<option value="actor" name="pharmacist">Who is your favorite actor?</option>
		</select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">Answer:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="answer"/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4">New Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="newpass"/>
    </div>
  </div>
  
      <input type="submit" value="GO" name="submit" id="csubmit"/>
	
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