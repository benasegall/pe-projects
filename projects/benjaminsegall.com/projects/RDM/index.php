<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Responsive Design Modules</title>

	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<?php

	$theme = "";
	if (isset($_GET["theme"])) {
		if ($_GET['theme'] == "dark") {
		$theme = "dark-theme";
		}	
	}
 ?>

<body class="<?php echo $theme?>">

<div class="module-2">

	<section class="dark-theme-structure">
		<div class="site-nav">
			<h2><a href="../../?page=projects">Exit Project</a></h2>
			<nav>
				<ul>
	 				<li><a href="?"><img class="mode" src="images/sun.svg"></a></li>
	 				<li><a href="?theme=dark"><img class="mode" src="images/moon.svg"></a></li>
	 			</ul>
			</nav>
		</div>
	</section>

	<div class="structure">
		
		<section class="opener">
			<h2>Heading level 2</h2>
			<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
		</section>

		<section class="card-grid">
			<?php foreach ([1, 2, 3 ,4 ,5 ,6] as $card) { ?>
				<div class="card">
					<h3>Heading level 3</h3>
					<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
				</div>
			<?php } ?>
		</section>

		<section class="image-grid">
			<?php foreach ([1, 2, 3 ,4, 5, 6] as $card) { ?>
				<picture>
					<img src="https://peprojects.dev/images/landscape.jpg" alt="#">
				</picture>
			<?php } ?>
		</section>
	</div>
</div>	<!-- MODULE 2 -->

<div class="module-3">
	
	<div class="structure">

		<section class="opener">
			<p class="teaser">Little teaser</p>
			<h2>Heading level 2</h2>
			<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
		</section>

		<div class="card-grid">
			<section class="space">
				<div class="card border">
					<img class="logo" src="images/m3-log.svg" alt="#">
					<h3>Heading level 3</h3>
					<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
				</div>

				<div class="card border">
					<img class="logo" src="images/m3-log.svg" alt="#">
					<h3>Heading level 3</h3>
					<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
				</div>
			</section>

			<section>
				<?php foreach ([1, 2] as $card) { ?>
					<div class="card border">
						<img class="logo" src="images/m3-log.svg" alt="#">
						<h3>Heading level 3</h3>
						<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
					</div>
				<?php } ?>
			</section>
		</div>

		<section class="closer">
			<div class="line"></div>
			<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
		</section>
	</div>

</div> <!-- MODULE 3 -->

<div class="module-4">
	
	<section class="opener">
		<div class="structure">
			<p class="teaser">Little teaser</p>
			<h2>Heading level 3</h2>
			<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
		</div>
	</section>

	<div class="structure">
		<div class="card-grid flex-grid">

			<?php foreach ([1, 2, 3] as $card) { ?>
				<div class="card border flex-box">
					<img class="logo" src="images/m4-log.svg" alt="#">
					<h3>Heading level 3</h3>
					<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
				</div>
			<?php } ?>
		</div>
	</div>

</div> <!-- MODULE 4 -->

<div class="module-5">
	
	<div class="structure">
		
		<section class="opener">
			<p class="teaser">Little teaser</p>
			<h2>Heading level 2</h2>
			<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
		</section>

		<section class="card-grid">
			<div class="card">
				<p class="teaser">Little teaser</p>
					<details>
						<summary class="h3">Heading level 3</summary>
						<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
					</details>
				</div>
			<?php foreach ([1, 2] as $card) { ?>
				<div class="card">
					<details>
						<summary class="h3">Heading level 3</summary>
						<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
					</details>
				</div>
			<?php } ?>
		</section>

		<section class="card-grid">
			<div class="card">
				<p class="teaser">Little teaser</p>
					<details>
						<summary class="h3">Heading level 3</summary>
						<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
					</details>
				</div>
			<?php foreach ([1, 2, 3] as $card) { ?>
				<div class="card">
					<details>
						<summary class="h3">Heading level 3</summary>
						<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
					</details>
				</div>
			<?php } ?>
		</section>
	</div>

</div> <!-- MODULE 5 -->

</body>
</html>
