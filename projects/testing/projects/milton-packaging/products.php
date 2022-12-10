<?php include("product-data.php"); ?>

<h1>Display</h1>

<ul>

	<?php foreach ($product_data as $product) { ?>
		<li class="grid">
			<div class="card">
				<h2 class="title"><?=$product["title"]?></h2>
				<p class="detail"><?=$product["detail"]?></p>
				<picture class="tile">
					<img src="https://peprojects.dev/images/landscape.jpg" alt="">
				</picture>
				<a href="?page=info&product=<?=$product["id"]?>">Discover</a>
			</div>
		</li>
	<?php } ?>
</ul>