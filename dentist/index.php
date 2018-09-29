<?php
session_start();
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM doctors WHERE docEmail='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['dlogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into doctorslog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['dlogin']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$host  = $_SERVER['HTTP_HOST'];
$_SESSION['dlogin']=$_POST['username'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into doctorslog(username,userip,status) values('".$_SESSION['dlogin']."','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";
$extra="index.php";
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dentist Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color">
		<link rel="stylesheet" href="bridge3.css">
	</head>
	<div class="header">
    <div class="wrap">
  <div class="logoH">

          <h1>Sanchez<font color="#b666d2">Dental</font>Care</h1>
          
        </div>

  <div class="logoH2">
          <img src="201.png" height="10" width="360">
  </div>


        <div class="logos">
         <img src="111.png" height="35" width="35">


         

        </div>

 <ul>
    <li><a href="http://localhost/commentsection/sampleslider.php">Home</a></li>
          <li><a href="http://localhost/commentsection/AboutUs.php">About </a></li>
           <li><a href="http://localhost/commentsection/Service.php">Services	</a></li>
           <li><a href="http://localhost/commentsection/Office.php">Office</a></li>
          
                  
                  <li><a href="http://localhost/commentsection/index.php">Testimonial</a></li>
                  <li><a href="http://localhost/commentsection/Contact.php">Contact</a></li>
                   
                    <li><a href="http://localhost/commentsection/admin/index.php">Admin</a></li>
                     <li><a href="http://localhost/commentsection/dentist/index.php">Dentist Login</a></li>




      </ul> 

      <div class="clear"> </div>
      <div class="space">
  <div class="twitter">
  <img src="t.png" >
</div>

<div class="f">
  <img src="f.png" >
</div>
<div class="insta">
  <img src="insta.png" >
 </div>
   <div class="copyright">
      &#169; Copyright 2019-2020 All Rights Reserved

   </div>
     <div class="logoH3">

          <h1>Sanchez<font color="#b666d2">Dental</font>Care</h1>
          
        </div>
<div class="logoH4">
          <img src="201.png" height="10" width="370">
        </div>
         <div class="logos2">
          <img src="111.png" height="35" width="35">
        </div>
</div>


           
</div>
</div>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../../index.html">	<h2><center>  Sanchez<font color="#b666d2"> Dental</font>Care<br><br><center><h2><font color="#b666d2">Doctor's Login</font></h2></center></center></h2></a>
				</div>

				<div class="box-login">
					<form class="form-login" method="post">
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter your name and password to log in.<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							
						
						</fieldset>
					</form>

					
			
				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>