<?php
	if (isset($_POST['submit'])) {
		$user=$_POST['un'];
		$pass=$_POST['pwd'];

		$con=mysqli_connect("localhost","root","","parth");
		$qr="SELECT fname,password FROM student WHERE fname='$user' and password='$pass'";
		$ex=mysqli_query($con,$qr);

		$exe=mysqli_num_rows($ex);

		session_start();

		$_SESSION['name']=$user;

			if ($exe==1){
				header("location:first.php?name=$user");
			}
			else
			{
				echo "try again..";
			}
		}

?>