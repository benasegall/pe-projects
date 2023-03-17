<!-- PSEUDOCODE -->

<!-- 
Counting the Number of Chars

input = prompt for input string
output = input + num of chars in input

create an input prompt
test if input is string
push input to an empty array + create array
loop the array and attach result to counter
print counter
else prompt again 
-->

<style>
	
	pre {
		color: lime;
		background-color: black;
		padding: 10px;
	}

</style>

<?php

	function showCode($input) {
		echo "<pre>";
		echo "<code>";
		var_dump($input);
		echo "</code>";
		echo "</pre>";
	}


	$letters = ["a", "b", "c"];
	$string = 'word';

	// echo $string[0];

	foreach (str_split($string) as $letter) {
		echo $letter . ",";
	}

	array_push($letters, "d", true, "true", 5, $string);

	// NEW

	if (isset($_POST['entered'])) {
		$string = ($_POST['prompt']);
	}

	array_push($letters, "d", true, "true", 5, $string);

	showCode($letters);

	$test = explode(",", "the,story,is,longer");
	var_dump($test);


	// custom vers

	// echo strlen($string);

	// function stringCount($input) {
	// 	$count = 0;
	// 	for ($i = 0; $i < strlen($input); $i++) {
	// 		$count++;
	// 	}
	// 	return $count;
	// }

	// $message = "The total is, " . stringCount($string);
	$message = "The total is, " . strlen($string);

?>


<form method="POST">
	
	<p>Counting the Number of Characters</p>

	<div class="field">
		<label>Say something</label>
		<input type="text" name="prompt" value="<?=$string?>">
	</div>

	<button type="submit" name="entered">Submit</button>

</form>

<p><?=$message?></p>





