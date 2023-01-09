<?php

	$page = null;
	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	}

	function getPage($page) {
		include($page . ".php");
	}

?>