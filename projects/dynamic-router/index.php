<?php include "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Dynamic Router</title>

	<style>

		html {
		  box-sizing: border-box;
		}
		*, *:before, *:after {
		  box-sizing: inherit;
		}

		body {
			font-family: sans-serif;
			display: flex;
			flex-direction: column;
			max-width: 900px;
			margin: auto;
			padding: 0 5%;
		}

		.site-nav ul {
			list-style-type: none;
			padding: 0;
		}

		.site-nav {
			display: flex;
			flex-direction: column;
		}

		.site-nav ul {
			display: flex;
			gap: 20px;
		}

		a {
			display: block;
			text-decoration: underline;
			color: blue;
		}

		p a {
			display: inline;
		}
	</style>

</head>
<body>
	<header>
		<?php include('pages/site-nav.php'); ?>
	</header>
	<main>
		<?php renderPage(); ?>
	</main>
</body>
</html>
