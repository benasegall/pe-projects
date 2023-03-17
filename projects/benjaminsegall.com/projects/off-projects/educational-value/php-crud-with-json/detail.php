<?php 
	$id = $_GET['id'];
	$item = getRecordById($id);
	$name = $item["name"];
?>


<p>Dynamic detail route for:</p>

<h1><?=$name?></h1>

<p>Detail: <em>read one record</em></p>

<footer>
	<a href="?page=update&id=<?=$id?>">Update</a>
	<a href="?page=delete&id=<?=$id?>">Delete</a>
</footer>
