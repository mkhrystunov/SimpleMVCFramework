<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $head ?></h1>
	<?php
	foreach ($paragraphs as $paragraph) {
		echo '<p>', $paragraph, '</p>';
	}
	?>
</body>
</html>