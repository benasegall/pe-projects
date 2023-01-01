<?php 
	$json = file_get_contents('data/projects.json');
	$projectsData = json_decode($json, true);
?>

<div class="card-grid">
	<?php foreach ($projectsData as $projectCard) { ?>
		<section class="card-theme">
			<ul>
				<h2 class="subhead"><?=$projectCard["name"]?></h2>
				<p><?=$projectCard["langs"]?></p>
				<p><?=$projectCard["descr"]?></p>
				<p><a href="#">Case Study</a></p>
				<p><a href="#">View Website</a></p>
			</ul>
		</section>
	<?php } ?>
</div>