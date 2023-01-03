<?php include("header.php"); ?>

			<div class="content-wrap">

				<header class="head opener head-spacing align-content-Cone-Rone">
					<?php 
					$title = "Contact";

					include('templates/modules/page-title/template.php')
					?>

					<span class="separator"></span>

				</header>

				<section class="info align-content-Cone-Rtwo">
					<div>
						<?php
						$info =
						'<p class="subhead card-spacing">Thank you for checking out my site, I would love to connect with you.</p>';

						include('templates/modules/page-info/template.php')
						?>
					</div>
					<div class="p-spacing">
						<?php
						$emailMessage = "Send me an email directly at";
						$emailBar = "benasegall@gmail.com";

						include('templates/modules/email-bar/template.php')
						?>
					</div>
					<div class="card-spacing">
						<?php include('templates/modules/social-list/template.php'); ?>
					</div>
				</section>

				<section class="info align-content-Ctwo-Rtwo">
					<?php
					include('templates/modules/form/template.php')
					?>
				</section>

			</div>

		</div>
	</main>
</body>