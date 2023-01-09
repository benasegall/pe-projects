
<?php
	$id = $_GET["id"];
	$record = getRecordById($id);
	$name = $record ? $record["name"] : false;
	deleteRecordById($id);
?>


<h1 class='term'>Delete</h1>

<?php if ($name) { ?>
	<p>You deleted <?=$name?>.</p>
<?php } else { ?>
	<p>The record for <code><?=$id?></code> already deleted.</p>
<?php } ?>
