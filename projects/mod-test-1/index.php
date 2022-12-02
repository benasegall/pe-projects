
<?php
	require "meta.php";
?>

<body>
	<div class="structure">

		<div class="whole-grid">

			<div class="flex-column-1">

		<section class="opener">
			<div class="card">
				<h2>Heading level 2</h2>
				<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
			</div>
		</section>

		<div class="card-grid">
			<section>
			<?php foreach ([1, 2] as $card) { ?>
				<div class="card border">
					<h3>Heading level 3</h3>
					<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
				</div>
			<?php } ?>
			</section>

			<section>
			<?php foreach ([1, 2] as $card) { ?>
				<div class="card border">
					<h3>Heading level 3</h3>
					<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
				</div>
			<?php } ?>
			</section>
		</div>
			</div>

			<div class="card-grid-2 even-space">

			<section class="block-small">
				<?php foreach ([1, 2] as $card) { ?>
					<div class="card">
						<picture>
							<img src="https://peprojects.dev/images/landscape.jpg" alt="#">
						</picture>
					</div>
				<?php } ?>
			</section>

			<section class="block-small">
				<?php foreach ([1, 2] as $card) { ?>
					<div class="card">
						<picture>
							<img src="https://peprojects.dev/images/landscape.jpg" alt="#">
						</picture>
					</div>
				<?php } ?>
			</section>

			<section class="block-wide">
				<?php foreach ([1, 2] as $card) { ?>
					<div class="card">
						<picture>
							<img src="https://peprojects.dev/images/landscape.jpg" alt="#">
						</picture>
					</div>
				<?php } ?>
			</section>

			<section class="block-wide">
				<?php foreach ([1, 2] as $card) { ?>
					<div class="card">
						<picture>
							<img src="https://peprojects.dev/images/landscape.jpg" alt="#">
						</picture>
					</div>
				<?php } ?>
			</section>
		</div>

	</div> <!-- whole-grid -->

	</div>
</body>
</html>
