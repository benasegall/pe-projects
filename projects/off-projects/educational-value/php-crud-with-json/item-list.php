
<?php
	$items = getDatabase()["items"];
?>


<h2>Items</h2>

<p>List: <em>read many records</em></p>


<?php if ($items) { ?>

	<ul>
		<?php foreach ($items as $id => $item) { ?>
			<li>
				<h2><?=$item["name"]?></h2>

				<a href='?page=detail&id=<?=$id?>'>Detail</a>
			</li>
		<?php } ?>
	</ul>

<?php } else { ?>

	<p>There are currently no items</p>

<?php } ?>
