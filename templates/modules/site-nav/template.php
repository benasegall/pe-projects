<!-- HTML -->
<div class="nav-wrapper">

	<nav class="logo-menu">
		<ul>
			<li><h2><a href="?page=home">Benjamin Segall</a></h2></li>
			<li><button onclick="menuClose()" class="toggle" id="open">Menu</button></li>
		</ul>
	</nav>

	<nav class="site-menu">
		<div class="pages">
			<ul>
				<li><a href="?page=about">About</a></li>
				<li><a href="?page=projects">Projects</a></li>
				<li><a href="?page=contact">Contact</a></li>
			</ul>
		</div>
	</nav>

</div>

<!-- JS -->

<script>
	let body = document.querySelector('body');
	let buttonText = document.getElementById('open');

	body.addEventListener('click', function(event) {
		console.log(event.target);
		if (event.target.matches('.toggle')) {
			body.classList.toggle('small-menu-open');
		}
	});


	function menuClose() {
		if (buttonText.textContent === "Menu") {
			buttonText.textContent = "Close";
		} else {
			buttonText.textContent = "Menu";
		}
	}
</script>