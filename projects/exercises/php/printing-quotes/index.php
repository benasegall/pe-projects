<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Printing Quotes</title>
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
	$theQuote = '';
	$whoSays = '';
	$quote = '';
	$author = '';

	if (isset($_POST['submitted'])) {
		if (isset($_POST['quote'])) {
			$quote = $_POST['quote'];
		}
		if (isset($_POST['author'])) {
			$author = $_POST['author'];
		}
		$theQuote = 'What is the quote? ' . $quote;
		$whoSays = 'Who said it? ' . $author;
	}
	?>

	<form method="POST">

		<h1>Printing Quotes</h1>

		<fieldset>
			<label>Enter a quote.</label>
			<input type="text" name="quote" value="<?=$quote?>">

			<label>Enter the author.</label>
			<input type="text" name="author" value="<?=$author?>">
		</fieldset>
		<button type="submit" name="submitted">Submit</button>
	</form>

	<div class="print">
		<p><?=$theQuote?></p>
		<p><?=$whoSays?></p>
	</div>

	<div class="links">
		<a href="../../../../?page=projects">Return to Projects</a>
		<a href="../../../../?page=exercises">Return to Exercises</a>
	</div>
	
</body>
</html>