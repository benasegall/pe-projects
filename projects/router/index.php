<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		p+p {
			padding: 20px;
		}
	</style>
</head>
<body>
	
</body>
</html>


<?php include "functions.php"; ?>

<header class="site-header">
	<p><?=queryString();?></p>
	<?php include('pages/site-nav.php'); ?>
</header>

<?php renderPage(); ?>