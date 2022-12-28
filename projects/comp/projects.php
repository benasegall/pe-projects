<?php include("header.php"); ?>

	<div class="content-wrap">
		<header class="title">
			<div class="structure">
				<div class="align-content">

				<?php 
					$title = "Projects";

					include('templates/modules/page-title/template.php')
				?>
				
				</div>
			</div>
		</header>

		<section class="info">
			<div class="structure">
				<div class="align-content">

				<?php include('templates/modules/projects-list/template.php'); ?>

				</div>
			</div>
		</section>
	</div>

	</main>
</body>