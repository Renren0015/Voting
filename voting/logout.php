<?php

	session_start();
	session_destroy();
	unset($_SESSION['username']);
	echo "<script>alert('You are now logged out');</script>";
	header("refresh:1;url=login.php");

?>