<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Printing Quotes</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>

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
			<label>What's the quote?</label>
			<input type="text" name="quote" value="<?=$quote?>">

			<label>Who said it first?</label>
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