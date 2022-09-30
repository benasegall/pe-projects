<?php

// $array = ["one", 21, "cat", "monster"];

// $monster = [
// 	"id" => "2015",
// 	"name" => "Robert",
// 	"favoriteFood" => "humans",
// 	"age" => 202,
// 	"adopted" => "false"
// ];

// $concat = $array[0] . " " . $array[2]; 
// //the dots aren't that bad if you think of them as plus signs like other languages, . == +

// echo "<ol>";

// foreach ($array as $item) {
// 	echo "<li>" . $item . "</li>";
// }

// MONSTERS

$Bob = [
	"id" => "1",
	"name" => "Bob",
	"favoriteFood" => "Building Materials",
	"age" => 6,
	"adopted" => "false",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$Billy = [
	"id" => "2",
	"name" => "Billy",
	"favoriteFood" => "friedChicken",
	"age" => 4,
	"adopted" => "true",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$BillyBob = [
	"id" => "3",
	"name" => "BillyBob",
	"favoriteFood" => "chicken",
	"age" => 5,
	"adopted" => "false",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$BillyJeff = [
	"id" => "4",
	"name" => "BillyJeff",
	"favoriteFood" => "eggos",
	"age" => 7,
	"adopted" => "false",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$JeffJamesBob = [
	"id" => "5",
	"name" => "JeffJamesBob",
	"favoriteFood" => "feet",
	"age" => 2,
	"adopted" => "true",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$Jill = [
	"id" => "6",
	"name" => "Jill",
	"favoriteFood" => "water",
	"age" => 11,
	"adopted" => "false",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$monsters = [$Bob, $Billy, $BillyBob, $BillyJeff, $JeffJamesBob, $Jill];

foreach ($monsters as $monster) {
	$id = $monster["id"];
	$name = $monster["name"];
	$story = "The coolest monster here is " . $monster["name"] . " !";
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];

	if ($status == "true") {
		$status = "adopted";
	} else {
		$status = "Up for adoption!";
	}

	echo "<li class='monster'>";

		echo
			"<monster-card id=' " . $id . " '>" .
			"<picuture class='portrait'>" .
				"<img src='" . $portrait . "' width='100'>" .
			"<h2 class='name'>" . $name . "</h2>" .

			"<p class='story'>" . $story . "</p>" .
			"<p class='status'>" . $status . "</p>" .
			"</monster-card>";

	echo"</li>";
}

?>