<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Received input</title>
	<link rel="stylesheet" href="mystyle.css">
</head>

<body>
	<font size="10" color="blue">Thank you. I got your form!</font>
	<?php
		$name = $_POST["name"];
		$class = $_POST["class"];
		$uni = $_POST["university"];
		$gender = $_POST["gender"];
		$birthday = $_POST["birthday"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$color = $_POST["color"];
		$idcard = $_POST["idcard"];
		$startd = $_POST["startd"];
		$dued = $_POST["dued"];
		$image = $_POST["image"];
		print(" <br>Your name is $name
				<br>Class: $class
				<br>University: $uni
				<br>Gender: $gender
				<br>Birthday: $birthday
				<br>Email: $email
				<br>Phone: $phone
				<br>Favourite color code: $color
				<br>ID number: $idcard valid from $startd to $dued");
		print("<br>Your hobbies is ");
		if(!empty($_POST["hob"])){
			foreach($_POST["hob"] as $hob_key){
				print("<br>--->$hob_key");
			}
		}else{
			print("not inputted yet!");
		}
		print("<br>");
		echo '<img src="'.$image.'" width="15%" height="35%"';
	?>
</body>
</html>
