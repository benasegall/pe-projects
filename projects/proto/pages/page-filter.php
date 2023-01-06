<div class="structure">
	<?php include ('templates/components/page-header/template.php'); ?>

<div class="content-wrap">
	<?php
	foreach ($pageData["sections"] as $section) {
		if ($section["page"] == "home") {
			include("home.php");
		}
		if ($section["page"] == "about") {
			include("about.php");
		}
		if ($section["page"] == "projects") {
			include("projects.php");
		}
		if ($section["page"] == "contact") {
			include("contact.php");
		}
		if ($section["page"] == "404") {
			include("404.php");
		}
	}
	?>
</div>

</div>