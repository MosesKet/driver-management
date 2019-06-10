<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login | Transportation Workers Record</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="This is a system for creating and managing drivers, vehicles and contracts" name="description">
	<meta content="Moses Ketuojo" name="author">
	<base href="html/">

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="../assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet">
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet">
	<link href="../assets/css/default/style.min.css" rel="stylesheet">
	<link href="../assets/css/default/style-responsive.min.css" rel="stylesheet">
	<link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme">
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<?php
require_once('config/db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: ./index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='../login.php'>Login</a></div>";
	}
    }else{
?>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(../assets/img/login-bg/login.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>Login</b></h4>
					<p>
						Welcome 
						<br>Kindly Enter Your Login Data To Proceed	
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>Login</b> 
						<small>Please Enter Your Login Data</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
					<form action="" method="POST" class="margin-bottom-0">
						<div class="form-group m-b-15">
							<input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required="">
						</div>
						<div class="form-group m-b-15">
							<input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required="">
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" value="">
							<label for="remember_me_checkbox">
							Remember Me
							</label>
						</div>
						<div class="login-buttons">
							<button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
						</div>
						<div class="m-t-20 m-b-40 p-b-40 text-inverse">
							
						</div>
						<hr>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end right-container -->
		</div>
		<!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/default.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<?php } ?>
</body>
</html>
