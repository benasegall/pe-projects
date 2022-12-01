
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

	$peeta = 0;
	$katniss = 0;

	if (isset($_POST['entered'])) {

		if(isset($_POST["peeta"])) {
			$peeta = $_POST["peeta"];
		}

		if (isset($_POST["katniss"])) {
			$katniss = $_POST["katniss"];
		}

		$count = floatval($peeta) + floatval($katniss);

		echo "<p class='feedback'>$count</p>"; 
	}
?>

<form method="POST">
	<p>testing...</p>
	
	<div class="field">
		<label>Peeta's berries</label>
		<input type="number" name="peeta" value="<?=$peeta?>" min="0" >
	</div>

	<div class="field">
		<label>Katniss's berries</label>
		<input type="number" name="katniss" value="<?=$katniss?>" min="0">
	</div>

	<button type="submit" name="entered">Submit</button>

</form>

</body>
</html>
