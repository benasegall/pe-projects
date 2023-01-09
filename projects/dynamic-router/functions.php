<?php

	// UTILITIES

	function queryString() {
		return $_SERVER["QUERY_STRING"];
	}

	// ROUTING

	function currentPage() {
		if (isset($_GET["page"])) {
			return $_GET["page"];
		} else {
			return "home";
		}
	}

	function pageData() {
		$page = currentPage();
		$filePath = "data/$page.json";

		if (file_exists($filePath)) {
			$json = file_get_contents($filePath);
		} else {
			$json = file_get_contents("data/404.json");
		}

		$pageData = json_decode($json, true);
		return $pageData;
	}

	function renderPage() {
		$filePath = "pages/site-router.php";
		$pageData = pageData();

		if (file_get_contents($filePath)) {
			include($filePath);
		} else {
			include("pages/404.php");
		}
	}

?>