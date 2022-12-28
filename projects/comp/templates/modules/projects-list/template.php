<?php 
	$json = file_get_contents('data/projects.json');
	$projectsData = json_decode($json, true);
?>

<div class="card-grid">
	<?php foreach ($projectsData as $projectCard) { ?>
		<section>
			<h2><?=$projectCard["name"]?></h2>
			<h3><?=$projectCard["langs"]?></h3>
			<p><?=$projectCard["descr"]?></p>
		</section>
	<?php } ?>
</div>