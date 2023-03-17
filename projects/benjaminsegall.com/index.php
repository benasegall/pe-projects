<?php include ('functions.php'); ?>
<?php $pageData = pageData(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Benjamin Segall</title>
  <meta name="description" content="Portfolio of American Front-end developer Benjamin Segall based on the East Coast.">

	<link rel="icon" href="images/favicon.svg">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="styles/site.css">
</head>
<body>
	<header class="site-header">
		<div class="structure">
			<?php include('templates/modules/site-nav/template.php'); ?> 
		</div>
	</header>

	<main class="site-content">

		<div class="structure">
			
			<?php include ('templates/modules/page-header/template.php'); ?>

			<div class="content-wrap">
				<?php renderPage(); ?>
			</div>

		</div>
	</main>

	<footer class="site-footer">
		<div class="structure">
			<?php include('templates/modules/site-footer/template.php'); ?>
		</div>
	</footer>
	</body>