<?php include("header.php"); ?>

			<div class="content-wrap">

				<header class="graphic-diptych align-content-Cone-Rone">
					<?php
					$title = '<h1 class="light">Research</h1><h1 class="medium">Design</h1><h1 class="bold">Develop</h1>';

					include('templates/modules/page-title/template.php')
					?>
				</header>

				<section class="title align-content-Cone-Rtwo">
					<?php 
					$info =
					'<p>Hello, my name is Ben.</p>';

					include('templates/modules/page-info/template.php')
					?>
				</section>

				<section class="info align-content-Ctwo-Rtwo">
					<?php 
					$info =
					"<p>I’m a front-end developer based on the East Coast. I care about creating semantic, clean code and maintainable CSS with lots of explanatory notes. I also like JavaScript.</p>
					<p>It's important to me that I have a full view of the development process, while I have a growing understanding of the back-end my passion is for design and presentation.</p>
					<p>I'm currently under mentorship at Perpetual Education. Honing my professional skills and learning about the design and development process from idea to implementation.</p>
					<p>You can find some of my work on <a href=\"https://github.com/benasegall\" target=\"_blank\">GitHub</a> and occasionally I write on <a href=\"https://readingbenjamin.substack.com/\" target=\"_blank\">Substack</a>.</p>";

					include('templates/modules/page-info/template.php')
					?>
				</section>

			</div>
	
		</div>
	</main>
</body>