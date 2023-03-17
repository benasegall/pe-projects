<div class="exercises-grid">

	<?php foreach($section["list"] as $solution) { ?>
		<section class="project">
			<h2><?=$solution["subtitle"]?></h2>
			<p><a href="<?=$solution["PHPlink"]?>"><?=$solution["PHPdemo"]?></a></p>
			<p><a href="<?=$solution["JSlink"]?>"><?=$solution["JSdemo"]?></a></p>
			<p><a href="<?=$solution["VUElink"]?>"><?=$solution["VUEdemo"]?></a></p>
		</section>
	<?php } ?>

</div>