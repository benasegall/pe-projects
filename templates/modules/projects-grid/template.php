<?php
	$json = file_get_contents("data/projects.json");
	$projectsData = json_decode($json, true);
?>

<div class="projects-grid">

<?php foreach ($projectsData as $project) { ?>
	<section class="project">
		<ul>
				<li>
					<h2><?=$project["name"]?></h2>
					<p><?=$project["langs"]?></p>
					<p><?=$project["descr"]?></p>
					<p><a href="<?=$project["case-study"]?>"><?=$project["reveal"]?></a></p>
					<p><a href="<?=$project["link"]?>"><?=$project["website"]?></a></p>
				</li>
		</ul>
	</section>
<?php } ?>

</div>