
<?php 
	session_start();
	if (!isset($_SESSION['name'])) {
		header('location: index.php');
	}
			$name=$_GET['name'];
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>first</title>
</head>
<body>

	<div style="margin: 0; float: left; background: #D433FF; height: 100px; width: 90%;">
		<h1 style="text-align: center; color: yellow;">Student ERP system</h1>	
	</div>
		
 	<a href="logout.php">
 		<div style="box-sizing: border-box; margin:0; padding-top: 15px; text-align: center;align-items: center; float: left; width: 10%; height: 100px; background: #336EFF;">
 			<h3 style="color: white; text-align: center;">Log Out</h3>
		</div>
	</a>

	<div style="display: block; width: 100%; background: #33A5FF ; text-align: left; margin:0">
		<h2 style="padding-left:20px; color: white">welcome <?php  echo $name; ?> </h2>
	</div>

	<?php
 	$con=mysqli_connect("localhost","root","","parth");
	$qr="select id,fname,lname,city,qualification from student";
	$ex=mysqli_query($con,$qr);

	
	echo "<table border='1px solid black'><tr><td>id</td><td>fname</td><td>lname</td><td>city</td><td>qualification</td><td>edit</td><td>delete</td></tr>";
	
	while ($row=mysqli_fetch_array($ex)) {

		echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th><th><a href='edit.php?name=$name&id=$row[0]'>edit</a></th><th><a href='delete.php?id=$row[0]&name=$name  '>delete</a></th></tr>";
		
	}
	echo "</table>";
 ?>
<br><br>
	
</body>
</html>



