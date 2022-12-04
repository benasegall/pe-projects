
<?php
	require "../meta.php";
?>

<script src="js/script.js" defer></script>

<body class="resume">
	<header>
		<div class="structure">
			<div class="toggle-flex">
				<h1>Portfolio</h1>
				<input type="checkbox" id="darkmode-toggle">
				<label for="darkmode-toggle"></label>
			</div>
		</div>
	</header>

	<section class="nav">
		<div class="structure">
			<nav>
				<ul>
					<li class="off"><a href="../">About</a></li>
					<li class="off"><a href="../code">Code</a></li>
					<li class="on"><a href="../resume">Resume</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<div class="structure">
		<?php
			include "resume.php";
		?>
	</div>
</body>
</html>
