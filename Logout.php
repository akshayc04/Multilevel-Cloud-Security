<?php
//Start session
	session_start();
//Unset the variables stored in session
	unset($_SESSION['SESS']);
	//session_destroy();
//redirect to login page
	header('Location:login.php');
?>