<!DOCTYPE html>

<?php require("router.php"); ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Milton Packaging</title>

	<!-- style -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<header>
		<h1>Milton Packaging</h1>
	<?php
		include("site-menu.php")
	?>
	</header>
	<main>
		<?php
			getTemplate($page);
		?>
	</main>

</body>
</html>