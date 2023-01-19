
<?php
	$id = $record["id"];
	$name = $record["name"];
?>

<record-card>
	<h2><?=$name?></h2>

	<p><?=$id?></p>

	<a href="?page=detail&id=<?=$id?>">Link</a>
</record-card>
