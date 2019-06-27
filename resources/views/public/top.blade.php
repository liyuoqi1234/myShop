<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>Mstore - Online Shop Mobile Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="HandheldFriendly" content="True">

	<link rel="stylesheet" href="index/css/materialize.css">
	<link rel="stylesheet" href="index/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="index/css/normalize.css">
	<link rel="stylesheet" href="index/css/owl.carousel.css">
	<link rel="stylesheet" href="index/css/owl.theme.css">
	<link rel="stylesheet" href="index/css/owl.transitions.css">
	<link rel="stylesheet" href="index/css/fakeLoader.css">
	<link rel="stylesheet" href="index/css/animate.css">
	<link rel="stylesheet" href="index/css/style.css">
	
	<link rel="shortcut icon" href="index/img/favicon.png">

</head>
<body>

	<!-- navbar top -->
	<div class="navbar-top">
		<!-- site brand	 -->
		<div class="site-brand">
			<a href="{{url('/')}}"><h1>首页</h1></a>
		</div>
		<!-- end site brand	 -->
		<div class="side-nav-panel-right">
			<a href="#" data-activates="slide-out-right" class="side-nav-left"><i class="fa fa-user"></i></a>
		</div>
    </div>
    
    <!-- side nav right-->
	<div class="side-nav-panel-right">
		<ul id="slide-out-right" class="side-nav side-nav-panel collapsible">
			<li class="profil">
				<img src="index/img/profile.jpg" alt="">
				<h2>  {{Session('data')}}</h2>
			</li>
			<li><a href="setting.html"><i class="fa fa-cog"></i>Settings</a></li>
			<li><a href="about-us.html"><i class="fa fa-user"></i>About Us</a></li>
			<li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact Us</a></li>
			<li><a href="/login"><i class="fa fa-sign-in"></i>Login</a></li>
			<li><a href="/register"><i class="fa fa-user-plus"></i>Register</a></li>
			<li><a href="/login"><i class="fa fa-user-plus"></i>退出</a></li>
		</ul>
	</div>
    <!-- end navbar top -->
    @yield('datas')