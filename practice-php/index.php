<h1>PHP practice</h1>

<?php
	$first = "";

	if (!$first) {
		$first = "Benjamin";
	}

	$last = "Segall";
	$fullName = $first . " " . $last;
	$age = 10 + 12;

	if ($age < 22) {
		$age = "YOU ARE WRONG";
	} else {
		$age = "OK";
	}

	echo $first . " " . $last;
?>

<p>My name is <?=$fullName?>. I'm <?=$age?> years old.</p>