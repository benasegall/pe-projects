
<?php

include "functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<header>
		<p><?=queryString();?></p>
		<h1>Page Title</h1>
		<p>Page Intro</p>

		<?php include('pages/site-nav.php'); ?>
	</header>

	<?php getPageTemplate(currentPage());?>

</body>
</html>