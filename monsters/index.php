<?php

$shadow = [
	"id" => "1",
	"name" => "Shadow",
	"favoriteFood" => "Building Materials",
	"age" => 6,
	"adopted" => "false",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$orangina = [
	"id" => "2",
	"name" => "Orangina",
	"favoriteFood" => "friedChicken",
	"age" => 4,
	"adopted" => "true",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$mrBanana = [
	"id" => "3",
	"name" => "MR. Banana",
	"favoriteFood" => "chicken",
	"age" => 5,
	"adopted" => "false",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$missReadsALot = [
	"id" => "4",
	"name" => "Miss Readsalot",
	"favoriteFood" => "eggos",
	"age" => 7,
	"adopted" => "false",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$limabean = [
	"id" => "5",
	"name" => "Limabean",
	"favoriteFood" => "feet",
	"age" => 2,
	"adopted" => "true",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$fragoo = [
	"id" => "6",
	"name" => "Fragoo",
	"favoriteFood" => "water",
	"age" => 11,
	"adopted" => "false",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$codey = [
	"id" => "6",
	"name" => "Codey",
	"favoriteFood" => "water",
	"age" => 11,
	"adopted" => "false",
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];

$monsters = [$shadow, $orangina, $mrBanana, $limabean, $fragoo, $codey];

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