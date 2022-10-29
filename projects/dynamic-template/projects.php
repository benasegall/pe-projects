
<?php include("info-data.php"); ?>

<h1>Projects</h1>

<ul>
	<?php foreach($info_data as $data) { ?>
		<li class="item">
			<div class="item-card">
				<p class="info">Project: <?=$data["project"]?></p>
				<p class="info">Location: <?=$data["location"]?></p>
				<p class="info">Active: <?=$data["active"]?></p>
				<a href="?page=detail&data=<?=$data["id"]?>">More info.</a>
			</div>
		</li>
	<?php } ?>
</ul>