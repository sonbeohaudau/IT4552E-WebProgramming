<?php
	include "Page.php";
	
	$title = "SPORT NEWS!!";
	$year = 2017;
	$copyright = "Copyright: Protected by DCMA";

	$sportPage = new Page($title, $year, $copyright);
?>

<html>
	<head>
		<title>Sports page's title</title>
	</head>
	<body>
		<?php 
			$sportPage->setHeader1(); 
			$sportPage->addContent("World Cup final: Brazil vs Germany - Who will be the new cup holder?");
			$sportPage->setFooter1();
		?>
	</body>
</html>

