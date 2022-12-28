<?php include("header.php"); ?>

<div class="content-wrap">
	<header class="title">
		<div class="structure">
			<div class="align-content">

			<?php 
				$title = "Contact";

				include('templates/modules/page-title/template.php')
			?>
			
			</div>
		</div>
	</header>

	<section class="info">
		<div class="structure">
			<div class="align-content">
			<?php
				include('templates/modules/form/template.php')
			?>

			</div>
		</div>
	</section>

	<section class="footer">
		<div class="structure">

			<?php 
				$emailBar = "benasegall@gmail.com";

				include('templates/modules/email-bar/template.php')
			?>
			
		</div>
	</section>
</div>

	</main>
</body>