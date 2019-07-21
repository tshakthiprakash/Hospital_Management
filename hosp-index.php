<?php
$status=false;
$status1=false;
require 'core.php';
require 'connect.php';
if(isset($_POST['username'])&& isset($_POST['password']))
{
	$username= $_POST['username'];
	$password= $_POST['password'];
	if(!empty($username)&&!empty($password))
	{
      $query= "SELECT `id`,`design` FROM `userlogin` WHERE `id` = '$username' AND `pwd` = '$password'";
	  //$query = "select * from userlogin";
	  if($query_run=mysql_query($query))
	  {
		  $query_num_rows=mysql_num_rows($query_run);
		  if($query_num_rows==0)
		  {
			$status1=true;
			
		  }
		  else if($query_num_rows==1)
		  {
			  $user_id=mysql_result($query_run, 0, 'id');
			  $design=mysql_result($query_run, 0, 'design');
			  $_SESSION['user_id']=$user_id;
			  header('Location:'.$design.'.php');
		  }
	  }

}
	else
	{
	$status=true;
	}
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>APPLE HOSPITALS</title>
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="hsstyle.css"/>
<link rel="stylesheet" type="text/css" href="slide.css"/>  
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
    #slides {
      display: none;
    }

    #slides .slidesjs-navigation {
      margin-top:5px;
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
      background-image: url(img/btns-next-prev.png);
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-right:5px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px;
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px;
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: red;
    }

    .navbar {
      overflow: hidden;
    }
  </style> 
 
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
<li><a href="gallery.php">Gallery</a></li>
<li><a href="about_us.php">About Us</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-6">
 <div id="slides">
      <img src="slides/img/hosp1.jpg">
      <img src="slides/img/hosp2.jpg">
      <img src="slides/img/hosp3.jpg">
      <img src="slides/img/hosp4.jpg">
	  </div>
</div>
<div class="col-sm-1">
</div>
<div class="col-sm-4" id="sidebar">
<div id="login_top">Login</div>
<form class="form-horizontal" id="login-form" name="form1" method="post" action="">
<div class="form-group">
    <label class="control-label col-sm-2" id="username">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" placeholder="Enter user id" name="username"/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password"/>
    </div>
  </div>
  <div id="login_bot">
  <button type="submit" class="default" name="submit"><span class ="glyphicon glyphicon-log-in"></span> <b>Login</b></button><br>
<a href="frgtpass.php">forget password?</a>
  </div>
</form>
<?php
if($status)
{
echo '<h4 style="color:blue;text-align:center">please enter your username and password';}
if($status1){
echo '<h4 style="color:blue;text-align:center">Invalid Userid or password, for eg 1001';
} ?>
<div id="msg" class="msg">

</div>
</div>
</div>
<div class="row">
<div class="col-sm-12" id="footer">
Copyright &copy APPLE HOSPITALS
</div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="slides/js/jquery.slides.min.js"></script>
<script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
</script>
</body>
</html>