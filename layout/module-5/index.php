
<?php
	require "meta.php";
?>

<body>

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
</body>
</html>
