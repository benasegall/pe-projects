
<?php include("page-header.php"); ?>

<?php
	foreach ($pageData["sections"] as $section) {
		if ($section["module"] == "home") {
			include("home-section.php");
		}
		if ($section["module"] == "about") {
			include("about-section.php");
		}
	}
?>