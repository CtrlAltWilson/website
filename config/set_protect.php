<?php 
if($protect == 1)
{
	if(isset($_SESSION['username']))
	{
		$userLoggedIn = $_SESSION['username'];
	}
	else
	{
		header("Location: ../youshallnotpass");
	}
}
//session_destroy();

?>