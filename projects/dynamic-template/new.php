
<?php

	$submitted = "";

	if (isset($_POST['add'])) {
		$submitted = "Thank you for your input.";
	}

?>

<h1>Your opinions inform our work.</h1>

<form method="POST">
	<field>
		<h3>Project Name.</h3>
		<p>Which project is to your concern.</p>
		<input type="text">
	</field>

	<field>
		<h3>Vote.</h3>
		<p>Yes or No.</p>
		<input type="text">
	</field>

	<field>
		<h3>Your thoughts, suggestions.</h3>
		<p>Any opinion is welcome.</p>
		<input type="text">
	</field>

	<field>
		<h3>Password Authentication</h3>
		<p>Community members only.</p>
		<input type="password">
	</field>

	<button type="submit" name="add">
		Push
	</button>

	<?php
	if ($submitted) {
		echo $submitted;
	} else {
		echo "Submit when ready.";
	} ?>
</form>