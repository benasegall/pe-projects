<?php 
	$json = file_get_contents('data/projects.json');
	$projectsData = json_decode($json, true);
?>

<div class="card-grid">
	<?php foreach ($projectsData as $projectCard) { ?>
		<section class="card-spacing">
			<ul>
				<h2 class="subhead"><?=$projectCard["name"]?></h2>
				<p class="card-p-spacing"><?=$projectCard["langs"]?></p>
				<p class="card-p-spacing"><?=$projectCard["descr"]?></p>
				<p class="card-p-spacing"><a href="#">Case Study</a></p>
				<p class="card-p-spacing"><a href="#">View Website</a></p>
			</ul>
		</section>
	<?php } ?>
</div>