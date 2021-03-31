<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Square and Cube</title>
</head>

<body>
	<font size="5" color="blue">Generate Square and Cube value</font>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
		<?php //1.4.3
			if(array_key_exists("start",$_GET)){
					$start = $_GET["start"];
					$end = $_GET["end"];
			}else{
				$start = 0; $end = 0;
			}
		?>
		<table>
			<td>Select start number:</td>
			<td><select name="start">
					<?php
						for($i=0;$i<10;$i++){
							if($start==$i){
								print("<option selected>$i</option>");
							}else{
								print("<option>$i</option>");
							}
						}
					?>
				</select>
			</td>
			<td>Select end number:</td>
			<td><select name="end">
					<?php
						for($i=0;$i<20;$i++){
							if($end==$i){
								print("<option selected>$i</option>");
							}else{
								print("<option>$i</option>");
							}
						}
					?>
				</select>
			</td>
			<tr>
				<td align="right"><input type="submit" value="Submit"></td>
				<td align="left"><input type="reset" value="Reset"></td>
			</tr>
		</table>
		<table>
			<tr><th>Number</th><th>Square</th><th>Cube</th></tr>
			<?php
				if(array_key_exists("start",$_GET)){
					//1.4.3
//					$start = $_GET["start"];
//					$end = $_GET["end"];
					//
					$i = $start;
					while($i <= $end){
						$sqr = $i*$i;
						$cube = $i*$i*$i;
						print("<tr><td>$i</td><td>$sqr</td><td>$cube</td></tr>");
						$i = $i+1;
					}
				}
			?>
		</table>
	</form>
</body>
</html>
