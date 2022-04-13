<?php

if($config==1)
{
	require 'config/config.php';

	if(isset($_SESSION['username']))
	{
		$userLoggedIn = $_SESSION['username'];
		$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$userLoggedIn'");
		$user = mysqli_fetch_array($user_details_query);
	}
	else
	{
		//header("Location: register");
	}
	/*
	  if (isset($_POST['lock'])) {
	    lockpage();
	  }
	  function lockpage() {
		session_destroy();
	  }
	*/
}
?>
<!DOCTYPE html>
<html><!--
				.------..------..------..------..------.
				|P.--. ||O.--. ||C.--. ||K.--. ||I.--. |
				| :/\: || :/\: || :/\: || :/\: || (\/) |
				| (__) || :\/: || :\/: || :\/: || :\/: |
				| '--'P|| '--'O|| '--'C|| '--'K|| '--'I|
				`------'`------'`------'`------'`------'
				--------Designed and developed by Wilson
-->
<head>
	<title>Wilson Ngo | Let's figure it out</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/e0dc16c1bb.js" crossorigin="anonymous"></script>
	<script src="assets/js/show_only_domain.js"></script>
	<script src="assets/js/fancy2.js"></script>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style2.css">
	<link rel="stylesheet" type="text/css" href="assets/css/loader.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-10644DPRYN"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-10644DPRYN');
	</script>

</head>
<body>
<header>
	<a id="top"></a>
	<div class="navbar" role="navigation">
		<div class="container">
    	<div class="navbar-header">
      	<a class="navbar-brand" id="logo" href="#">Wilson.</a>
        <!--
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
        	<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="mynav">
      	<ul class="nav navbar-nav navbar-right">
      	-->
      		<!--
        	<li><a href="#about">About</a></li>
          <li><a href="#clients">Clients</a></li>
          <li><a href="#process">Projects</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#blogs">Blogs</a></li>
        -->
        </ul>
      </div>
     </div>	
	</div>
</header>

<!-- LOGO 2 -->
	<div class="nameWilson">
		<a class="navbar-brand" id="logo logopage" href="#top">Wilson.</a>
	</div>

<!-- FOOTER -->
 <footer>
 	<a></a>
			<a href="mailto:wilson@wilsonngo.com" target="_blank">
				<i class="fas fa-envelope-square"></i>
			</a>
			<a href="https://github.com/CtrlAltWilson" target="_blank">
				<i class="fab fa-github-square"></i>
			</a>
			<a href="https://www.facebook.com/BxNgo/" target="_blank">
				<i class="fab fa-facebook-square"></i>
			</a>
			<a href="https://fb.me/msg/BxNgo" target="_blank">
				<i class="fab fa-facebook-messenger"></i>
			</a>
			<a href="https://www.instagram.com/justpocki" target="_blank">
				<i class="fab fa-instagram-square"></i>
			</a>			
			<a href="/linkedin" target="_blank">
				<i class="fab fa-linkedin"></i>
			</a>
			<a></a>
 </footer>
	<!--<div class="wrapper">-->

		