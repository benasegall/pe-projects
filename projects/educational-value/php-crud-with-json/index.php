<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	require('style.php');
	require('functions.php');

	initializeDatabase();

	// figure out what page should be rendered
	if ( isset($_GET['page']) ) {
		$route = $_GET['page'];
	} else {
		$route = 'home';
	}
?>


<nav>
	<a href='?'>List</a> <!-- the home page can list all of the records -->
	<a href='?page=create'>Create</a>
</nav>

<main>
	<!-- page template outlet -->
	<?php getTemplate($route); ?>
</main>
