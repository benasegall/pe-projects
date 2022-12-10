
<?php
	require "meta.php";
?>

<body>
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
</body>
</html>
