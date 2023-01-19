<?php
function formatCode($code) {
	echo "<code class='show-code>";
	echo "<pre>";
	print_r($code);
	echo "</pre>";
	echo "</code>";
}

formatCode($_POST);
if ($formSubmitted) {
	$name = $_POST['name'];
}

$greeting = "Hello, $name, nice to meet you!";
?>