
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Password Validation</title>

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="structure">
		<?php
		// pseudocode
		// prompt for a username and password
		// compare password given to cached password
		// if password matches display “Welcome!”
		// else display “I don’t know you.”

		$code = "qwerty";
		$username = "";
		$password = "";
		$display = "";

		if (isset($_POST["entered"])) {

			if ($_POST["password"] == $code) {
				$display = "Welcome!";
			} else {
				$display = "I don't know you.";
			}
		}
		?>

		<form method="POST">
			<div class="field">
				<p>the password is qwerty</p>
				<label>Enter your Username</label>
				<input name="username" value="<?=$username?>">
			</div>

			<div class="field">
				<label>Enter your Password</label>
				<input name="password" value="<?=$password?>">
			</div>

			<button type="submit" name="entered">Enter</button>

			<?php
			echo $display;
			?>
		</form>
	</div>
</body>
</html>
