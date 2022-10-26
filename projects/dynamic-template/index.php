
<!DOCTYPE html>

<?php

	// router
	$page = null;
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = "home"; // default
	}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/meyer.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<?php include("site-menu.php"); ?>
	</header>

	<main class="content">
		<?php
			if ($page == "home") {
				include("home.php");
			}	
			if ($page == "list") {
				include("list.php");
			}
			if ($page == 'detail') {
				include("detail.php");
			}
		?>
	</main>
</body>
</html>