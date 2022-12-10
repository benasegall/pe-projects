
<?php
	require "meta.php";
?>

<script src="js/script.js" defer></script>

<body class="home">
	<header>
		<div class="structure">
			<div class="toggle-flex">
				<h1>Benjamin Segall</h1>
				<input type="checkbox" id="darkmode-toggle">
				<label for="darkmode-toggle"></label>
			</div>
		</div>
	</header>

	<section class="nav">
		<div class="structure">
			<nav>
				<ul>
					<li class="on"><a href="../ben">About</a></li>
					<li class="off"><a href="./code">Code</a></li>
					<li class="off"><a href="./resume">Resume</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<div class="structure">
		<?php
			include "about.php";
		?>
	</div>
</body>
</html>
