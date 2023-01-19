<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP exercises</title>
</head>
<body>
	<h2>Hello World</h2>

	<form method="POST">
		<fieldset>
			<label for="username">What is your name?</label>
			<input id="username" type="text" name="name">
		</fieldset>
		<button type="submit" name="submitted">Submit</button>
	</form>

	<output>
		<p><?=$greeting?></p>
	</output>

	<?php
	function formatCode($code) {
		echo "<code class='show-code>";
		echo "<pre>";
		print_r($code);
		echo "</pre>";
		echo "</code>";
	}

	$name = "";
	$greeting = "";
	
	formatCode($_POST);
	if ($formSubmitted) {
		$name = $_POST['name'];
	}

	$greeting = "Hello, $name, nice to meet you!";
	?>

	<output>
		<p><?=$greeting?></p>
	</output>
</body>
</html>