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
	if ( file_exists($filePath) ) {
		$json = file_get_contents("data/$page.json");
	} else {
		$json = file_get_contents("data/404.json");
	}
	$pageData = json_decode($json, true);
	return $pageData;
}

function renderPage() {
	$filePath = "templates/pages/default.php";
	if (file_get_contents($filePath)) {
		include($filePath);
	} else {
		include('pages/404.php');
	}
}

?>