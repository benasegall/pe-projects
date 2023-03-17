
<!DOCTYPE html>

<?php require("router.php");?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Benjamin Segall — Full-Stack Developer</title>

	<!-- META -->
	<meta name="description" content="Portfolio of Full-Stack Developer Benjamin Segall based in New York.">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FAVICON -->
	<link rel="icon" href="images/favicon.svg">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
		<?php
			getPage($page);
		?>
	</div>

</body>
</html>