<style>

	* {
		box-sizing: border-box;
	}

	body {
		padding: 10px;
		max-width: 90%;
	}
	
	label, input{
		display: block;
	}

	input[type=text] {
		width: 700px;
		max-width: 90%;
		padding: 4px 8px;
		margin: 5px 0 5px 0;
	}

</style>


<?php

	$message = '';

	if(isset($_POST['entered'])) {

		if(isset($_POST['quote'])) {
			$quote = $_POST['quote'];
		}
		if(isset($_POST['author'])) {
			$author = $_POST['author'];
		}

		$messageOne = "What is the quote? " . $quote . ". Who said it? " . $author;
		$messageTwo = $author . " says, " . $quote . ".";
	}

?>


<form method="POST">
	
	<p>Printing Quotes</p>

	<div class="field">
		<label>Enter a quote</label>
		<input type="text" name="quote" value="<?=$quote?>">
		<label>Enter the author</label>
		<input type="text" name="author" value="<?=$author?>">
	</div>

	<button type="submit" name="entered">Enter</button>

</form>

<p><?=$messageOne?></p>
<p><?=$messageTwo?></p>

