<?php include("header.php"); ?>

<div class="content-wrap">
	<header class="title">
		<div class="structure">
			<div class="align-content">
			
			<?php 
				$title = "About";

				include('templates/modules/page-title/template.php')
			?>

			</div>
		</div>
	</header>

	<section class="info">
		<div class="structure">
			<div class="align-content">

		<?php 
			$info = 
			"<p>My high school and college years set the footing for my career path. In high school I enrolled myself in a graphic design program at a vocational training school. This was my first experience in a design field. Later on I took courses at the Fashion Institute of Technology in New York. In college I pursued a marketing degree but was not fully connected with this field of study.</p>
			<p>Once the pandemic hit, I decided to take a leave of absence from school and moved to New York. There I discovered Codesmith and took their Computer Science prep course. This was my first significant experience with software development.</p>
			<p>After this, I decided instead of returning to campus I would pursue a different route and was accepted into the design oriented software development mentorship program at Perpetual Education.</p>
			<p>Beyond staring into my code editor I spend my days with my dog, at lunch, on FaceTime or waiting for a favorable wind. I'm into architecture, interior design, video games, video essays and artisanal teas.</p>";

			include('templates/modules/page-info/template.php')
		?>
			
			</div>
		</div>
	</section>
</div>

	</main>
</body>