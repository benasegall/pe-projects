<?php include("site-header.php"); ?>

<?php
	foreach ($pageData["sections"] as $section) {
		if ($section["id"] == "home") {
			include("home.php");
		}
		if ($section["id"] == "about") {
			include("about.php");
		}
		if ($section["id"] == "contact") {
			include("contact.php");
		}
		if ($section["id"] == "404") {
			include("404.php");
		}
	}
?>