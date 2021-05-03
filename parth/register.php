<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
	<form method='get' >
	<h1>register</h1><br><br>
	<label>First name(user name) : </label><input type="textbox" name="fname" > <br><br>
	<label>Last name : </label><input type="textbox" name="lname"><br><br>
	<label>city : </label><select name="city"><option>ahmedabad</option><option>gandhinagar</option><option>maheshana</option><option>surat</option></select><br><br>
	<label>qualification : </label>10th<input type="checkbox" name="qual[]" value="10">12th<input type="checkbox" name="qual[]" value="12">diploma<input type="checkbox" name="qual[]" value="diploma">degree<input type="checkbox" name="qual[]" value="degree"><br><br>
	<label>password : </label><input type="password" name="pass"><br><br>
	<input type="submit" name="register">
	</form>
</body>
</html>

<?php
if(isset($_GET['register'])){
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];
	$city=$_GET['city'];
	$qual=$_GET['qual'];
	$fqul=implode(',', $qual);
	$pass=$_GET['pass'];
	// echo $fname .$lname .$city .$fqul .$pass;
	$con=mysqli_connect("localhost","root","","parth");
	$qr="insert into student(fname,lname,city,qualification,password) values('$fname','$lname','$city','$fqul','$pass')";
	$ex=mysqli_query($con,$qr);
	if ($ex) {
		header('location:index.php');
		
	}
	else{
		echo "unexepted error";
	}
}
?>