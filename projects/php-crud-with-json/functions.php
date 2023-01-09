<?php

function getTemplate($route) {
	include($route . '.php');
}

function initializeDatabase() {
	if ( !file_get_contents('database.json') ) {
		$database["lastUpdated"] = date("h:i:sa");
		$database["items"] = [];
		$json = json_encode($database);
		file_put_contents("database.json", $json);
	}
}

function getDatabase() {
	if ( file_get_contents('database.json') ) {
		$json = file_get_contents('database.json');
		return json_decode($json, true);
	} else {
		return [];
	}
}

function saveDatabase($database) {
	$database["lastUpdated"] = date("h:i:sa");
	$json = json_encode($database);
	file_put_contents("database.json", $json);
}

function createItem($record) {
	$id = uniqid("a");
	$database = getDatabase();
	$database["items"][$id] = $record;
	saveDatabase($database);
}

function getRecordById($id) {
	$database = getDatabase();
	foreach ( $database["items"] as $itemId => $item ) {
		if ( $itemId == $id ) {
			return $item;
		}
	}
}

function updateItem($id, $record) {
	$database = getDatabase();
	$database["items"][$id] = $record;
	saveDatabase($database);
}

function deleteRecordById($id) {
	$database = getDatabase();
	unset( $database["items"][$id] );
	saveDatabase($database);
}


/* you can redirect pages / locations too */
/* header('Location: ' . "?page=detail&id=" . $id); */
