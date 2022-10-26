
<?php include("info-data.php"); ?>

<h1>List</h1>

<ul>
	<?php foreach($info_data as $data) { ?>
		<?php

			$cost = "$" . number_format($data["cost"], 2, ".", ",");
			// format cost var

		?>
		<li class="item">
			<div class="item-card">
				<p class="info">label:<?=$data["label"]?></p>
				<p class="info">label:<?=$data["info"]?></p>
				<p class="info">cost:<?=$cost?></p>
				<a href="?page=detail&data=<?=$data["id"]?>">Find Out More.</a>
			</div>
		</li>
	<?php } ?>
</ul>