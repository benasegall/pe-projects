<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hour After Hour</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
	<script src="script.js" defer></script>

	<form>

		<h1>Hour After Hour Calculator</h1>

		<fieldset>
			<div>
			<label for="hours">Hours</label>
			<input name="hours" required id="hours" step="1" type="number" min="1" max="23" placeholder="hrs">
			</div>

			<div>
			<label for="when">When</label>
			<select name="when" id="when">
			<option value="from">After</option>
			<option value="before">Before</option>
			</select>
			</div>

			<div>
			<label for="time">Time</label>
			<select name="time" id="time">
			<option value="1am">1am</option>
			<option value="2am">2am</option>
			<option value="3am">3am</option>
			<option value="4am">4am</option>
			<option value="5am">5am</option>
			<option value="6am">6am</option>
			<option value="7am">7am</option>
			<option value="8am">8am</option>
			<option value="9am">9am</option>
			<option value="10am">10am</option>
			<option value="11am">11am</option>
			<option value="12am">12am</option>
			<option value="1pm">1pm</option>
			<option value="2pm">2pm</option>
			<option value="3pm">3pm</option>
			<option value="4pm">4pm</option>
			<option value="5pm">5pm</option>
			<option value="6pm">6pm</option>
			<option value="7pm">7pm</option>
			<option value="8pm">8pm</option>
			<option value="9pm">9pm</option>
			<option value="10pm">10pm</option>
			<option value="11pm">11pm</option>
			<option value="12pm">12pm</option>
			</select>
			</div>
		</fieldset>
		<button type="submit">Calculate</button>
	</form>

	<output id="output">
	</output>

	<div class="links">
		<a href="../../../../?page=projects">Return to Projects</a>
		<a href="../../../../?page=exercises">Return to Exercises</a>
	</div>
	
</body>
</html>
