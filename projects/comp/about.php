<?php include("header.php"); ?>

<div class="grid-wrap">
	<header class="title">
		<div class="structure">
			
			<?php 
				$title = "About";

				include('templates/modules/page-title/template.php')
			?>

		</div>
	</header>

	<section class="info">
		<div class="structure">

		<?php 
			$info = "<p>sec1</p><p>sec2</p><p>sec3</p>";

			include('templates/modules/page-info/template.php')
		?>
			
		</div>
	</section>
</div>

	</main>
</body>