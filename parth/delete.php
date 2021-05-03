<?php
	
	session_start();

	if (!isset($_SESSION['name'])) {
		header('location: index.php');
	}	

	$i=$_GET['id'];
	
	$n=$_GET['name'];

	$con=mysqli_connect("localhost","root","","parth");
	$qr="DELETE FROM student WHERE id=$i";
	$ex=mysqli_query($con,$qr);

	if($ex){
	header("location:first.php?name=$n");
	}
?>