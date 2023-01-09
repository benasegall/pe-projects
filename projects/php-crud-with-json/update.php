<?php 
	$id = $_GET['id'];
	$item = getRecordById($id);
	$name = $item["name"];

	if ( isset($_POST["submitted"]) ) {
		
		if ( isset($_POST["name"]) ) {
			$name = $_POST["name"];
		}

		$record = [
			"name" => $name,
		];

		updateItem($id, $record);
		// header('Location: ' . "?page=detail&id=" . $id);
	}
?>


<h1 class='term'>Update</h1>

<h2><?=$name?></h2>

<?php require('form.php'); ?>
