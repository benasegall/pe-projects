
<?php
	require "meta.php";
?>

<body>

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
</body>
</html>
