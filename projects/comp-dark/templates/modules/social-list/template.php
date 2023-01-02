<?php 
	$json = file_get_contents('data/social.json');
	$socialData = json_decode($json, true);
?>

<div>
	<?php foreach ($socialData as $socialSection) { ?>
		<section class="socials">
			<ul>
				<p><?=$socialSection["descr"]?> <a href="#"><?=$socialSection["link1"]?></a>, <a href="#"><?=$socialSection["link2"]?></a> and <a href="#"><?=$socialSection["link3"]?></a></p>
			</ul>
		</section>
	<?php } ?>
</div>