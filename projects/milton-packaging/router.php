<?php

	// router
	$page = null;
	if (isset($_GET['page'])) {
		$page = $_GET['page']; // url?page=string
	} else {
		$page = "products";
	}

	function getTemplate($page) {
		include($page . ".php");
	}

?>