<?php include("header.php"); ?>

<div class="grid-wrap">
	<header class="title">
		<div class="structure">

			<?php 
				$title = "<h1>Research</h1><h1>Design</h1><h1>Develop</h1>";

				include('templates/modules/page-title/template.php')
			?>
			
		</div>
	</header> 

	<section class="info">
		<div class="structure">
			
		<?php 
			$info = 
			'<p>Hello, my name is Ben.</p>
			<p>I’m a front-end developer based on the East Coast. I care about creating semantic, clean code and maintainable CSS with lots of explanatory notes. I also like JavaScript.</p>
			<p>It\'s important to me that I have a full view of the development process, while I have a growing understanding of the back-end my passion is for design and presentation.</p>
			<p>I\'m currently under mentorship at Perpetual Education. Honing my professional skills and learning about the design and development process from idea to implementation.</p>
			<p>You can find some of my work on <a href="https://github.com/benasegall" target="_blank">GitHub</a> and occasionally I write on <a href="https://readingbenjamin.substack.com/" target="_blank">Substack</a>.</p>';

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