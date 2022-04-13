<?php 
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/password_protected.php';
session_destroy();
 ?>

<!DOCTYPE html>
<html>
<pre style = "display:none">
				Site is under construction--------------
				.------..------..------..------..------.
				|P.--. ||O.--. ||C.--. ||K.--. ||I.--. |
				| :/\: || :/\: || :/\: || :/\: || (\/) |
				| (__) || :\/: || :\/: || :\/: || :\/: |
				| '--'P|| '--'O|| '--'C|| '--'K|| '--'I|
				`------'`------'`------'`------'`------'
				--------Designed and developed by Wilson
</pre>
<head>
	<title>Open Sesame!</title>
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/pw_protect.css">
	<!--Javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="assets/js/show_only_domain.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-3X1H9YM0PH"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-3X1H9YM0PH');
	</script>
</head>
<body>
	<div class = "middle">
		<form action="youshallnotpass.php" method="POST">
			<input type="password" name="protected_password" placeholder="" required>	
			<br>
			<input type="submit" name="password_button" value=">">
			<br>
			<p id="IncorrectPW" style="text-align: center"></p>	
			<?php if(in_array("IncorrectEmPw", $error_array)) echo ""; ?>
		</form>
		
		<a href="/linkedin"><img id="linkedin" src = "assets/images/icons/linkedin.png"></a>
	</div>
		<script type="text/javascript">
			var randTitle = Math.floor(Math.random() * 5);
			var newTitle ="test";	
			switch (randTitle)
			{
				case 0: 	var newTitle = "Where am I?"; 					break;
				case 1: 	var newTitle = "Feed Me!"; 						break;
				case 2: 	var newTitle = "Jazz Hands~"; 					break;
				case 3: 	var newTitle = "Open Sesame!"; 					break;
				case 4: 	var newTitle = "TO THE MOON!"; 					break;
				default: 	var newTitle = "What's the password?!"; 		break;
			}
			document.title = newTitle;			
		</script>
</body>
</html>
