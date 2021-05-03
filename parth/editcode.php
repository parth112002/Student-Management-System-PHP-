<?php
	
	session_start();

	if (!isset($_SESSION['name'])) {
		header('location: index.php');
	}

	if (isset($_GET['edit'])) {

	$sid=$_GET['sid'];
	$stname=$_GET['sname'];
	$fname=$_GET['firstname'];
	$lname=$_GET['lastname'];
	$city=$_GET['scity'];
	$qual=$_GET['qual'];
	$fqul=implode(',', $qual);

	$con=mysqli_connect("localhost","root","","parth");
	$qry="update student set fname='".$fname."' ,lname='".$lname."
	', city='".$city."',qualification='".$fqul."' where id=$sid";
	$exe=mysqli_query($con,$qry);

	echo $sid.$stname;
		if ($exe==true) {
			header("location:first.php?name=$stname");
		}
		else{
			echo "try again";
		}
	
	}


?>