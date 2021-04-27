<?php
	include "NewPage.php";
	
	$title = "FRIDAY MUSIC!!";
	$year = 2017;
	$copyright = "Copyright: Protected by FEDs";

	$sportPage = new NewPage();
?>

<html>
	<head>
		<title>Musics page's title</title>
	</head>
	<body>
		<?php 
			$sportPage->setHeader2($title);
			$sportPage->addContent("Will Bart Baker bring home another Grammy tonight?");
			$sportPage->setFooter2($year, $copyright);
		?>
	</body>
</html>

