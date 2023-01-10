<div class="info-grid">


<?php foreach($section["list"] as $item) { ?>
	<section class="info">
		<h2><?=$item["subtitle"]?></h2>
		<p><?=$item["info"]?></p>
	</section>
<?php } ?>

</div>