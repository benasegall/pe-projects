<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>mock-up</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="styles/site.css">
</head>
<body>
	<header class="site-header">
		<?php include('templates/components/nav/template.php'); ?>
	</header>

	<main>
		<?php include('templates/modules/diptych/template.php'); ?>

		<?php include('templates/modules/video/template.php'); ?>

		<?php include('templates/modules/image-description/template.php'); ?>

		<?php include('templates/modules/reviews/template.php'); ?>

		<?php include('templates/modules/free-quotes/template.php'); ?>

		<?php include('templates/modules/FAQ/template.php'); ?>
	</main>

	<footer class="site-footer">
		<?php include('templates/components/footer/template.php'); ?>
	</footer>
</body>
</html>