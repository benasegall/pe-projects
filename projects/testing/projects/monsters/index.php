<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adopt a Monster</title>

	<meta name="description" content="Adopt a Monster">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="style.css">

</head>

<body>

	<h1>National Center for Monster Adoption</h1>
	<p class="intro">Hello! Welcome to the National Center for Monster Adoption. Our monsters adorable little monsters could be yours. We prefer our adopters to come and meet them in person but we also do domestic shipping. If you are interested do not hesitate to click the green button for more information about!</p>

<?php

$shadow = [
	"id" => "1",
	"name" => "Shadow",
	"favoriteFood" => "Building Materials",
	"age" => 6,
	"adopted" => "false",
	"portrait" => "shadow.jpg",
];

$orangina = [
	"id" => "2",
	"name" => "Orangina",
	"favoriteFood" => "friedChicken",
	"age" => 4,
	"adopted" => "true",
	"portrait" => "orangina.jpg",
];

$mrBanana = [
	"id" => "3",
	"name" => "MR. Banana",
	"favoriteFood" => "chicken",
	"age" => 5,
	"adopted" => "false",
	"portrait" => "mr-banana.jpg",
];

$missReadsALot = [
	"id" => "4",
	"name" => "Miss Readsalot",
	"favoriteFood" => "eggos",
	"age" => 7,
	"adopted" => "false",
	"portrait" => "miss-reads-a-lot.jpg",
];

$limabean = [
	"id" => "5",
	"name" => "Limabean",
	"favoriteFood" => "feet",
	"age" => 2,
	"adopted" => "true",
	"portrait" => "limabean.jpg",
];

$fragoo = [
	"id" => "6",
	"name" => "Fragoo",
	"favoriteFood" => "water",
	"age" => 11,
	"adopted" => "false",
	"portrait" => "fragoo.jpg",
];

$codey = [
	"id" => "7",
	"name" => "Codey",
	"favoriteFood" => "water",
	"age" => 11,
	"adopted" => "false",
	"portrait" => "codey.jpg",
];

$monsters = [$shadow, $orangina, $mrBanana, $limabean, $fragoo, $codey];

?>

<ul class='monster-list'>

	<?php

	foreach ($monsters as $monster) {
		$id = $monster["id"];
		$name = $monster["name"];
		$story = "The coolest monster here is " . $monster["name"] . " !";
		$portrait = $monster["portrait"];
		$status = $monster["adopted"];
		$statusMessage = "Ready for adoption";

		if ($status == "true") {
			$status = "adopted";
			$statusMessage = "Found home";
		} else {
			$status = "not-adopted";
		}
		?>

		<li class="monster <?=$status?>">
			<monster-card id="<?=$id?>">
				<picture class="portrait">
					<img src="<?=$portrait?>" alt="Portrait of <?=$name?>" width='100'> 
				</picture>
				<h2 class="name"><?=$name?></h2>
				<p class="story"><?=$story?></p>
				<p class="status"><?=$statusMessage?></p>
			</monster-card>
		</li>

		<?php

}

echo "</ul>";
?>
</body>
</html>