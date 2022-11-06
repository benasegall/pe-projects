
<?php

	$title = "";
	$describe = "";
	$hasTitle = false;
	$hasDescribe = false;
	$answer = "";

	if (isset($_POST["submitted"])) { // if button submitted
		if (isset($_POST["title"])) { // if type is filled
			$title = $_POST["title"];

			if (strlen($title) > 0) {
				$hasTitle = true;
			}
		}

		if (isset($_POST["describe"])) {
			$describe = $_POST["describe"];

			if (strlen($describe) > 0) {
				$hasDescribe = true;
			}
		}

		if ($hasTitle && $hasDescribe) {
			$answer = "submitted";
		}

	}
?>

<h1>New Product</h1>

<form method="POST">
	<div class="field">
		<label>Title</label>
		<input type="text" name="title" value="<?=$title?>">
	</div>

	<div class="field">
		<label>Description</label>
		<input type="text" name="describe" value="<?=$describe?>">
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