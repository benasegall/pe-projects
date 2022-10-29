
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

	<h1><?=$this_data["project"]?></h1>
	
	<h2>New Development in the North Side.</h2>

	<picture>
		<img src="images/scheme-one.jpeg" alt="todo">
	</picture>

	<p>This is a schematic of our plans for East County's North District.</p>

<?php } else { ?>

	<h1>404.</h1>
	<p>Information could not be located. Please return to the listing page.</p>
	<a href="?page=projects">Here.</a>
<?php } ?>