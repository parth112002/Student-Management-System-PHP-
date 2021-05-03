<?php
	session_start();

	$name=$_SESSION['name'];

	// session_unset($name);

	session_destroy();

	header('location: index.php');
?>