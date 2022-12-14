<section>
	<h2><?=$section["heading"]?></h2>
	<p><?=$section["module"]?></p>

	<ul>
		<?php foreach ($section["items"] as $item) { ?>
		<li><h3><?=$item["title"]?></h3></li>
		<li><p><?=$item["copy"]?></p></li>
		<?php } ?>
	</ul>
</section>