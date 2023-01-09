
<?php
	// if the form was submitted... then 
	$name = "";
	if ( isset($_POST["submitted"]) ) {
		
		if ( isset($_POST["name"]) ) {
			$name = $_POST["name"];
		}

		$record = [
			"name" => $name,
		];

		createItem($record);

		// header('Location: ' . "?page=detail&id=" . $id);
	}
?>


<h1 class='term'>Create</h1>

<?php require('form.php'); ?>

<?php include("item-list.php"); ?>
