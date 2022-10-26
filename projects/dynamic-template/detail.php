
<?php include("info-data.php"); ?>

<?php
	if (isset($_GET['data'])) {
		$set_data_id = $_GET['data'];
	}

	echo $set_data_id;

	foreach ($info_data as $data) {
		if ($set_data_id == $data["id"]) {
			$this_data = $data;
		}
	}
?>

<?php
	if (isset($this_data)) { ?>

	<h1><?=$this_data["label"]?></h1>
	
	<h1>info</h1>

	<picture>
		<img src="https://peprojects.dev/images/landscape.jpg" alt="todo">
	</picture>

	<p>info</p>

<?php } else { ?>

	<h1>404.</h1>
	<p>Information could not be located. Please return to the listing page.</p>
	<a href="?page=list">here.</a>
<?php } ?>