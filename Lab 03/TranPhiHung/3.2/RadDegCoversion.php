<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Radian - Degree Converter</title>
</head>

<body>
<font color="blue" size="5" >Radian - Degree Converter</font>

	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
		<?php
		if(array_key_exists("input",$_GET)){
			$input = $_GET["input"];
			$mode = $_GET["mode"];
		}else{
			$input = 0;
			$mode = 1;
		}
		?>
		<br>Coversion mode: 
			<select name="mode">
				<?php
				if($mode==2){
					print("<option value="."1".">Rad->Deg</option>");			//This is
					print("<option value="."2"." selected>Deg->Rad</option>");	//to keep
				}else{															//mode unchanged
					print("<option value="."1"." selected>Rad->Deg</option>");	//after
					print("<option value="."2".">Deg->Rad</option>");			//submitted
				}
				?>
			</select>
		<br><br>
		<input type="number" step="any" name="input" value="<?php if(array_key_exists("input",$_GET)){echo $_GET["input"];}else echo 0?>" style="width: 50px">
		<?php
		if(isset($_GET["mode"])){
			$mode = $_GET["mode"];
			$input = $_GET["input"];
			if($mode==1){
				$output = $input*(180/M_PI);
				print("<strong>= $output &deg;</strong>");
			}else{
				$output = $input/(180/M_PI);
				$pi = $output/M_PI;
				print("<strong>= $output rad = $pi &pi;</strong>");
			}

		}
		?>
		<br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
