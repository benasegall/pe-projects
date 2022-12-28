<?php include("header.php"); ?>

<div class="grid-wrap">
	<header class="title">
		<div class="structure">

			<?php 
				$title = "<h1>Tit</h1><h1>Tit2</h1><h1>Tit3</h1>";

				include('templates/modules/page-title/template.php')
			?>
			
		</div>
	</header>

	<section class="info">
		<div class="structure">
			
		<?php 
			$info = "<p>home1</p><p>sec2</p><p>sec3</p>";

			include('templates/modules/page-info/template.php')
		?>

		</div>
	</section>

	<section class="footer">
		<div class="structure">
			
			<?php 
				$nameBar = "Benjamin Segall";

				include('templates/modules/name-bar/template.php')
			?>

		</div>
	</section>
</div>

	</main>
</body>