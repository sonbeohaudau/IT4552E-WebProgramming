<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<font color="blue" size="5">Appointment</font>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
	<?php //1.4.3
			if(array_key_exists("name",$_GET)){
					$day = $_GET["day"];
					$month = $_GET["month"];
					$year = $_GET["year"];
					$hour = $_GET["hour"];
					$min = $_GET["min"];
					$sec = $_GET["sec"];
			}else{
				$day = 0; $month = 0; $year = 0;
				$hour = 0; $min = 0; $sec = 0;
			}
		?>
		<br>Your name: <input type="text" name="name" value="<?php if(array_key_exists("name",$_GET)){echo $_GET["name"];}?>">
	<table width="200" border="0">
	  <tbody>
		<tr>
		  <th scope="row">Date</th>
		  <td><select name="day">
						<?php
							for($i=1;$i<=31;$i++){
								if($day==$i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select></td>
		  <td><select name="month">
						<?php
							for($i=1;$i<=12;$i++){
								if($month==$i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select></td>
		  <td><select name="year">
						<?php
							for($i=2000;$i<=2020;$i++){
								if($year==$i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select></td>
		</tr>
		<tr>
		  <th scope="row">Time</th>
		  <td><select name="hour">
						<?php
							for($i=0;$i<=23;$i++){
								if($hour==$i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select></td>
		  <td><select name="min">
						<?php
							for($i=0;$i<=59;$i++){
								if($min==$i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select></td>
		  <td><select name="sec">
						<?php
							for($i=0;$i<=59;$i++){
								if($sec==$i){
									print("<option selected>$i</option>");
								}else{
									print("<option>$i</option>");
								}
							}
						?>
					</select></td>
		</tr>
		  <tr>
				<td align="right"><input type="submit" value="Submit"></td>
				<td align="left"><input type="reset" value="Reset"></td>
			</tr>
	  </tbody>
	</table>
	<?php
	if(array_key_exists("name",$_GET)){
		$name = $_GET["name"];
		print("Hi $name!<br>");
	$day = substr(str_repeat(0, 2).$day, - 2);
	$month = substr(str_repeat(0, 2).$month, - 2);
	$hour = substr(str_repeat(0, 2).$hour, - 2);
	$min = substr(str_repeat(0, 2).$min, - 2);
	$sec = substr(str_repeat(0, 2).$sec, - 2);

	print("You have choose to have an appointment on $hour:$min:$sec at $day/$month/$year");
	}
	?>
</form>
</body>
</html>
