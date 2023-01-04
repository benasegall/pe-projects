<?php

// ROUTER

function currentPage() {
	if (isset($_GET['page'])) {
		return $_GET['page'];
	} else {
		return 'home';
	}
}

function pageData() {
	$page = currentPage();
	$filePath = "data/$page.json";
	$json = file_get_contents($filePath);
	if (!$json) {
		$json = file_get_contents("data/404.json");
	}
	$pageData = json_decode($json, true);
	return $pageData;
}

function renderPage() {
	$filePath = "pages/page-filter.php";
	$pageData = pageData();
	if (file_get_contents($filePath)) {
		include($filePath);
	} else {
		include('pages/404.php');
	}
}

?>