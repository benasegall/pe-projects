<?php include ('functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Benjamin Segall</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="styles/site.css">
</head>
<body>
	<header class="site-header">
		<div class="structure">
			<?php include('templates/modules/site-nav/template.php'); ?> 
		</div>
	</header>

	<main class="page-content">
		<?php renderPage(); ?>