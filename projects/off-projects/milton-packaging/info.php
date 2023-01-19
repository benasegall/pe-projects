<?php include("product-data.php"); ?>

<?php

	if (isset($_GET["product"])) {
		$prod_id = $_GET['product'];
	}

	foreach ($product_data as $product) {
		if ($prod_id == $product["id"]) {
			$this_prod_id = $product;
		}
	}
?>

<?php 
	
	if (isset($this_prod_id)) { ?>

	<h1><?=$this_prod_id["title"]?></h1>

	<picture>
		<img src="https://peprojects.dev/images/landscape.jpg" alt="">
	</picture>

	<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<?php } else { ?>

		<h1>404.</h1>
		<p>Page not found.</p>

	<?php } ?>