<?php

$items = [14, true, "Hello World"];

$chosenItem = $items[2];

echo $chosenItem;

$dog = [
	"age" => 14,
	"name" => "Toby",
	"breed" => "Labradoodle",
	"nickNames" => ["Tobs", "Tobias", "TB"]
];

echo $dog["name"];

?>

<p>The chosen item is <?=$chosenItem?></p>

<p>My dogs name is <?=$dog["name"]?>.</p>

<p>One nickname you can call him is <?=$dog["nickNames"(2)]?></p>