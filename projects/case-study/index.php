
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Design Case Study</title>

	<!-- META -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<section class="about">
		<div class="content">
			<?php
				include "about.php";
			?>
		</div>
	</section>

	<section class="challenge">
		<div class="content">
			<?php
				include "challenge.php";
			?>
		</div>
	</section>

	<section class="prototype">
		<div class="content">
			<?php
				include "prototype.php";
			?>
		</div>
	</section>

	<section class="solution">
		<div class="content">
			<?php
				include "solution.php";
			?>
		</div>
	</section>

	<section class="style">
		<div class="content">
			<?php
				include "style.php";
			?>
		</div>
	</section>

	<section class="results">
		<div class="content">
			<?php
				include "results.php";
			?>
		</div>
	</section>

	<section class="link">
		<div class="content">
			<?php
				include "link.php";
			?>
		</div>
	</section>
</body>
</html>