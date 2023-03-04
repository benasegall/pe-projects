import {
	unitList
} from './units.js';

let $output = document.querySelector('[data-output="main"]');

function setScreen(screen) {
	console.log("Set screen: ", screen);

	// from pages array dot notation name
	$output.innerHTML = pages[screen];
}

function renderUnit(unitItem) {
	return `<div class="unit-card">
			<img data-screen="unitDetails" src="${unitItem.image}">
			<h2>${unitItem.name}</h2>
			<p>${unitItem.description}</p>
			<button>Save for later</button>
		</div>`;
}

function renderUnits(unitList) {
	let units = "";

	unitList.forEach(function(unitItem) {
		units += renderUnit(unitItem);
	})
	return units;
}


let pages = {};

pages.logo = `
	<h1>Landing</h1>
	<section class="hero">
		<h1>The easiest way to rent, buy & sell your home</h1>

		<div class="search">
			<form>
				<input id="filter" type="text" placeholder="Add a filter" name="filter">
				<button id="go">Go</button>
			</form>
		</div>
	</section>

	<section id="unitListSection" class='units'>
		${renderUnits(unitList)}
		<button id="viewMore">View More</button>
	</section>

`;

pages.unitDetails = `
	<h1>Details</h1>
	<button data-screen="logo">Back</button>
`;



pages.savedHomes = `
	<h1>Saved</h1>

`;



pages.addNew = `
	<h1>New</h1>
	<form>
		<input id="name" type="text" placeholder="Add a name">
		<input id="desc" type="text" placeholder="Add a description">
		<input id="feat" type="text" placeholder="Add searchable features">
		<button id="unitInfo" type="submit"> Submit</button>
	</form>
`;



setScreen("logo"); // default landing page

export {
	setScreen,
	$output,
	renderUnits,
	renderUnit
};