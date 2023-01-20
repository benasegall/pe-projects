<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Saying Hello</title>
</head>
<body>
	<style>
		body {
			max-width: 600px;
			margin: auto;
		}
		
		form {
			display: grid;
			gap: 20px;
			padding: 30px 0;
		}

		form fieldset {
			display: grid;
			padding: 20px;
		}

		form button {
			font-family: inherit;
			justify-self: start;
			font-size: 1rem;
			padding: .5em 1em;
		}

		input + label {
			margin-top: 10px;
		}

		.links {
			display: grid;
			margin-top: 40px;
			gap: 20px;
		}


	</style>

	<?php
	$greeting = '';
	$name = '';

	if (isset($_POST['submitted'])) {
		if (isset($_POST['name'])) {
			$name = $_POST['name'];
		}
		$greeting = 'Hello there, ' . $name . ', thanks for trying out the demo!';
	}
	?>

	<form method="POST">

		<h1>Saying Hello</h1>

		<fieldset>
			<label>Enter your name.</label>
			<input type="text" name="name" value="<?=$name?>">

		</fieldset>
		<button type="submit" name="submitted">Submit</button>
	</form>

	<div class="print">
		<p><?=$greeting?></p>
	</div>

	<div class="links">
		<a href="../../../../?page=projects">Return to Projects</a>
		<a href="../../../../?page=exercises">Return to Exercises</a>
	</div>

</body>
</html>