<?php
	$json = file_get_contents("data/projects.json");
	$projectsData = json_decode($json, true);
?>

<section class="projects">
	<ul>
		<?php
			foreach ($projectsData as project) {
				echo "<li>";
				include ("projects-card.php");
				echo "</li>";	
			}
		?>
	</ul>
</section>

