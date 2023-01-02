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
						'<p class="subhead card-spacing">If you would like to know more, please get in touch. <br> Im always up for a chat.</p>';

						include('templates/modules/page-info/template.php')
						?>
					</div>
					<div class="p-spacing">
						<?php
						$emailMessage = "Send an email to";
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