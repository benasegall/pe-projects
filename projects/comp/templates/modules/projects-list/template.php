<?php 
	$json = file_get_contents('data/projects.json');
	$projectsData = json_decode($json, true);
?>

<div class="card-grid">
	<?php foreach ($projectsData as $projectCard) { ?>
		<section class="card-theme">
			<ul>
				<h2 class="card-title"><?=$projectCard["name"]?></h2>
				<p class="card-info"><?=$projectCard["langs"]?></p>
				<p class="card-info"><?=$projectCard["descr"]?></p>
				<p class="card-info"><a href="#">Case Study</a></p>
				<p class="card-info"><a href="#">View Website</a></p>
			</ul>
		</section>
	<?php } ?>
</div>