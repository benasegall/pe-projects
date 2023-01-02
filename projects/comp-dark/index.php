<?php include("header.php"); ?>

			<div class="content-wrap">

				<header class="head opener head-spacing align-content-Cone-Rone">
					<?php 
					$title = "Hello, my name is Ben.";

					include('templates/modules/page-title/template.php')
					?>
					
					<span class="separator"></span>

				</header>

				<section class="info align-content-Cone-Rtwo">
					<?php
					$info =
					'<h2 class="subhead p-spacing">Who am I</h2>
					<p class="p-spacing">I am a front-end developer based on the East Coast. I aim to contribute to analytically oriented organizations that deliver innovative ideas and create quality relationships that matter.</p>';

					include('templates/modules/page-info/template.php')
					?>
				</section>

				<section class="info align-content-Ctwo-Rtwo">
					<?php
					$info =
					'<h2 class="subhead p-spacing">My approach</h2>
					<p>It is important to me that I have a complete view of the development process. Collaborating with and learning from others with a common goal of delivering the greatest value to customers and users is the best way to connect the dots and gain a thorough understanding of the craft.</p>';

					include('templates/modules/page-info/template.php')
					?>
				</section>

			</div>
	
		</div>
	</main>
</body>