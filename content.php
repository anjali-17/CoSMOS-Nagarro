<?php
	session_start();
	if(!isset($_SESSION['email_id']) || !isset($_SESSION['pass']))
	{
		header("Location: home_page.php");
	}
	include 'home.php';
	
?>
