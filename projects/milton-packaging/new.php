
<?php

	$title = "";
	$description = "";
	$hasTitle = false;
	$hasDescription = false;
	$answer = "";

	if (isset($_POST["submitted"])) { // if button submitted
		if (isset($_POST["title"])) { // if type is filled
			$title = $_POST["title"];

			if (strlen($title) > 0) {
				$hasTitle = true;

				// new tile
				$newTitle = [
					"title" => $title,
				];

				// JSON file
				$titleJson = json_encode($newTitle);

				// save json
				file_get_contents("title.json", $titleJson);
			} 
		}

		if (isset($_POST["description"])) {
			$description = $_POST["description"];

			if (strlen($description) > 0) {
				$hasDescription = true;

				// new tile
				$newDescription = [
					"description" => $description,
				];

				// JSON file
				$descriptionJson = json_encode($newDescription);

				// save json
				file_get_contents("description.json", $descriptionJson);
			}
		}

		if ($hasTitle && $hasDescription) {
			$answer = "submitted";
		}

	}
?>

<h1>New Product</h1>

<form method="POST">
	<div class="field">
		<label>Product Title</label>
		<input type="text" name="title" value="<?=$title?>">
	</div>

	<div class="field">
		<label>Product Description</label>
		<input type="text" name="description" value="<?=$description?>">
	</div>

	<button type="submit" name="submitted">
		Add Product
	</button>

	<?php

		if ($answer) {
			echo $answer;
		}

	 ?>
</form>