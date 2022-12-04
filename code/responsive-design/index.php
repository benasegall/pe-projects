
<?php
	require "../../meta.php";
?>

<script src="js/script.js" defer></script>

<body class="code">
	<header>
		<div class="structure">
			<div class="toggle-flex">
				<h1>Projects</h1>
				<input type="checkbox" id="darkmode-toggle">
				<label for="darkmode-toggle"></label>
			</div>
		</div>
	</header>

	<section class="nav">
		<div class="structure">
			<nav>
				<ul>
					<li class="off"><a href="../../code">Back</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<div class="structure">
		<?php
			include "work.php";
		?>
	</div>
</body>
</html>
