<?php include("header.php"); ?>

<div class="grid-wrap">
	<header class="title">
		<div class="structure">

			<?php 
				$title = "Contact";

				include('templates/modules/page-title/template.php')
			?>
			
		</div>
	</header>

	<section class="info">
		<div class="structure">
			<?php
				include('templates/modules/form/template.php')
			?>
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