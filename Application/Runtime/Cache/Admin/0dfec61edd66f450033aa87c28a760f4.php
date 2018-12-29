<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Minimal and Clean Sign up / Login and Forgot Form by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="/paper/Public/Admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="/paper/Public/Admin/css/animate.css">
	<link rel="stylesheet" href="/paper/Public/Admin/css/style.css">


	<!-- Modernizr JS -->
	<script src="/paper/Public/Admin/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="menu">
						
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					

					<!-- Start Sign In Form -->
					<form action="<?php echo U('login/logincheck');?>" class="fh5co-form animate-box" data-animate-effect="fadeIn">
						<h2>系主任登录</h2>
						<div class="form-group">
							<label for="username" class="sr-only">用户名</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">密码</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>
						<div class="form-group">
							<a href="forgot.html">Forgot Password?</a></p>
						</div>
						 <div class="row">
						<div class="form-group">
							<input type="submit" value="登录" class="btn btn-primary">
						</div>
					</div>
					</form>
					<!-- END Sign In Form -->

				</div>
			</div>
		</div>
	
	<!-- jQuery -->
	<script src="/paper/Public/Admin/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="/paper/Public/Admin/js/bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="/paper/Public/Admin/js/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="/paper/Public/Admin/js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="/paper/Public/Admin/js/main.js"></script>


	</body>
</html>