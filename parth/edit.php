<?php
	
	session_start();

	if (!isset($_SESSION['name'])) {
		header('location: index.php');
	}
	
	$name=$_GET['name'];

	$id=$_GET['id'];
	
	$con=mysqli_connect("localhost","root","","parth");
	$qr="select fname,lname,city,qualification from student where id=$id";
	$ex=mysqli_query($con,$qr);
	$row=mysqli_fetch_array($ex);

	$ql=explode(",", $row[3]);

?>


<!DOCTYPE html>
<html>
<head>
	<title>edit page</title>
	
</head>
<body>

	<form method="get" action="editcode.php">

	<input type="hidden" name="sid" value="<?php echo $id; ?>">
	<input type="hidden" name="sname" value="<?php echo $name; ?>">

	<label>first name (user name) : </label><input type="text" name="firstname" value="<?php echo $row[0]; ?>"><br><br>
	<label>last name : </label><input type="text" name="lastname" value="<?php echo $row[1]; ?>"><br><br>
	<label>city : </label><select name="scity">
		<option <?php if($row[2]=="ahmedabad"){echo "selected";}else{echo "";} ?>>ahmedabad</option>
		<option <?php if($row[2]=="gandhinagar"){echo "selected";}else{echo "";} ?>>gandhinagar</option>
		<option <?php if($row[2]=="maheshana"){echo "selected";}else{echo "";} ?>>maheshana</option>
		<option <?php if($row[2]=="surat"){echo "selected";}else{echo "";} ?>>surat</option>
	</select><br><br>

	<label>qualification : </label>
	<input type="checkbox" name="qual[]" value="10" <?php if(in_array("10", $ql)){echo 'checked="checked"';} ?>><lable>10th</lable>
	<input type="checkbox" name="qual[]" value="12" <?php if(in_array("12", $ql)){echo 'checked="checked"';} ?>><lable>12th</lable>
	<input type="checkbox" name="qual[]" value="diploma" <?php if(in_array("diploma", $ql)){echo 'checked="checked"';} ?>><lable>diploma</lable>
	<input type="checkbox" name="qual[]" value="degree" <?php if(in_array("degree", $ql)){echo 'checked="checked"';} ?>><lable>degree</lable><br><br>
	
	<input type="submit" name="edit" value="edit">
	</form>

</body>
</html>
