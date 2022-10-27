
<?php

	if (isset($_POST['add'])) {
		echo "Submitted";
	}

?>

<h1>New</h1>

<form method="POST">
	<field>
		<label>Label</label>
		<input type="text">
	</field>

	<field>
		<label>Label</label>
		<input type="number">
	</field>

	<field>
		<label>Label</label>
		<input type="password">
	</field>

	<button type="submit" name="add">
		Push
	</button>
</form>