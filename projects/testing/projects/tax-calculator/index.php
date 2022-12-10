
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Tax Calculator</title>

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php

	// pseudocode
	// prompt for the input amount
	// prompt for the state
	// if state is “NY” then the input must be charged NY tax
	// display the subtotal, tax

		$sales = 0;
		$output = "";
		$tax = 0;

		foreach ([$ME = 5.5%, $NH = 0%, $VT = 6.24%, $MA = 6.25%, $RI = 7%, $CT = 6.35%, $NY = 8.52%, $NJ = 6.60%, $PA = 6.34%, $DE = 0%, $MD = 6%, $DC = 6%] as $states) {
			for ($i = 0; $i < strlen($states); $i++) {
			if(isset($_POST["entered"]) == $states[i]) {
				$tax = $states[i];
			}

			if (isset($_POST["sales"])) {
				$sales = $_POST["sales"];
			}

			$output = "$sales" + "$states[i]";
		}
		}
	?>

	<h1>This form shows the sales tax rates of the states of the northeast</h1>

	<form method="POST">
		<div class="field">
			<label>Choose a state</label>
			<input name="state" value="<?=$state?>">
		</div>

		<div class="field">
			<label>Enter a price</label>
			<input type="number" name="sales" value="<?=$sales?>" min="0">
		</div>

		<button type="submit" name="entered">Enter</button>

		<?php echo $output ?>

	</form>
</body>
</html>
