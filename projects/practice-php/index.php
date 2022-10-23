<style>
	form {
		padding: 10px;
	}

	label, input {
		display: block;
	}

	[type=submit] {
		margin-top: 15px;
	}

	.field + .field {
		margin-top: 10px;
	}

	.feedback {
		color: forestgreen;
	}
</style>


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

	<p>idk fill it out</p>
	
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




