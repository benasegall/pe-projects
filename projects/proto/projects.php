<?php include("header.php"); ?>

		<div class="grid">
			<header class="contact-page-title">
				<?php 

				$title = "<p>Projects</p>";

				include("page-title.php");

				?>
			</header>

			<div class="card-grid">
				<section class="project-1">
					<div class="card-theme">
						<?php 

						$name = "Module – 1";
						$descr = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, placeat!";

						include("projects-card.php");

						?>
					</div>
				</section>
				<section class="project-2">
					<div class="card-theme">
						<?php 

						$name = "Module – 2";
						$descr = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, placeat!";

						include("projects-card.php");

						?>
					</div>
				</section>
			</div>
		</div>
	</main>
</body>
</html>